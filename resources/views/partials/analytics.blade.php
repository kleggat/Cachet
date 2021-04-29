@if($enableExternalDependencies)
@if($appAnalytics)
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','{{ $appAnalytics }}');</script>
@endif
@if($appAnalyticsGoSquared)
<script>
    !function(g,s,q,r,d){r=g[r]=g[r]||function(){(r.q=r.q||[]).push(
    arguments)};d=s.createElement(q);q=s.getElementsByTagName(q)[0];
    d.src='https://d1l6p2sc9645hc.cloudfront.net/tracker.js';q.parentNode.
    insertBefore(d,q)}(window,document,'script','_gs');
    _gs('{{ $appAnalyticsGoSquared }}');
</script>
@endif
@if($appAnalyticsPiwikUrl)
<script type="text/javascript">
    var _paq = _paq || [];
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="{{ $appAnalyticsPiwikUrl }}";
        _paq.push(['setTrackerUrl', u+'/piwik.php']);
        _paq.push(['setSiteId', {{ $appAnalyticsPiwikSiteId }}]);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'/piwik.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<noscript><p><img src="{{ $appAnalyticsPiwikUrl }}/piwik.php?idsite={{ $appAnalyticsPiwikSiteId }}" style="border:0;" alt="" /></p></noscript>
@endif
@endif
