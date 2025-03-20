<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListCacheRulesResponseBody;

use AlibabaCloud\Tea\Model;

class configs extends Model
{
    /**
     * @description Enable caching on specified ports. Value range: 8880, 2052, 2082, 2086, 2095, 2053, 2083, 2087, 2096.
     *
     * @example 2082
     *
     * @var string
     */
    public $additionalCacheablePorts;

    /**
     * @description Browser cache mode. Possible values:
     * - no_cache: Do not cache.
     * - follow_origin: Follow origin cache policy.
     * - override_origin: Override origin cache policy.
     *
     * @example no_cache
     *
     * @var string
     */
    public $browserCacheMode;

    /**
     * @description Browser cache expiration time, in seconds.
     *
     * @example 300
     *
     * @var string
     */
    public $browserCacheTtl;

    /**
     * @description Set bypass cache mode. Possible values:
     * - cache_all: Cache all requests.
     * - bypass_all: Bypass cache for all requests.
     *
     * @example cache_all
     *
     * @var string
     */
    public $bypassCache;

    /**
     * @description Cache deception defense. Used to defend against web cache deception attacks; only verified cache content will be cached. Value range:
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $cacheDeceptionArmor;

    /**
     * @description Cache reserve eligibility. This is used to control whether user requests bypass the cache reserve node when returning to the origin. The value range is as follows:
     * - bypass_cache_reserve: Requests bypass the cache reserve.
     * - eligible_for_cache_reserve: Eligible for cache reserve.
     *
     * @example bypass_cache_reserve
     *
     * @var string
     */
    public $cacheReserveEligibility;

    /**
     * @description When generating the cache key, check if the cookie exists. If it does, add the cookie name (case-insensitive) to the cache key. Multiple cookie names are supported, separated by spaces.
     *
     * @example cookiename
     *
     * @var string
     */
    public $checkPresenceCookie;

    /**
     * @description When generating the cache key, check if the header exists. If it does, add the header name (case-insensitive) to the cache key. Multiple header names are supported, separated by spaces.
     *
     * @example headername
     *
     * @var string
     */
    public $checkPresenceHeader;

    /**
     * @description Configuration ID.
     *
     * @example 395386449776640
     *
     * @var int
     */
    public $configId;

    /**
     * @description Configuration type, which can be used to query global or rule-based configurations. Possible values:
     * - global: Query global configuration.
     * - rule: Query rule-based configuration.
     *
     * @example global
     *
     * @var string
     */
    public $configType;

    /**
     * @description Edge cache mode. The value range is as follows:
     * - follow_origin: Follow the origin server\\"s cache policy (if it exists), otherwise use the default cache policy.
     * - no_cache: Do not cache.
     * - override_origin: Override the origin server\\"s cache policy.
     * - follow_origin_bypass: Follow the origin server\\"s cache policy (if it exists), otherwise do not cache.
     *
     * @example follow_origin
     *
     * @var string
     */
    public $edgeCacheMode;

    /**
     * @description Edge cache expiration time, in seconds.
     *
     * @example 300
     *
     * @var string
     */
    public $edgeCacheTtl;

    /**
     * @description Edge cache expiration time, in seconds.
     *
     * @example 300
     *
     * @var string
     */
    public $edgeStatusCodeCacheTtl;

    /**
     * @description Include the specified cookie names and their values when generating the cache key. Multiple values are supported, separated by spaces.
     *
     * @example cookie_exapmle
     *
     * @var string
     */
    public $includeCookie;

    /**
     * @description Include the specified header names and their values when generating the cache key. Multiple values are supported, separated by spaces.
     *
     * @example example
     *
     * @var string
     */
    public $includeHeader;

    /**
     * @description The query strings to be reserved or excluded. Multiple values are supported, separated by spaces.
     *
     * @example example
     *
     * @var string
     */
    public $queryString;

    /**
     * @description The processing mode for query strings when generating the cache key. The value range is as follows:
     * - ignore_all: Ignore all query strings.
     * - exclude_query_string: Exclude specified query strings.
     * - reserve_all: Default, reserve all query strings.
     * - include_query_string: Include specified query strings.
     *
     * @example ignore_all
     *
     * @var string
     */
    public $queryStringMode;

    /**
     * @description Rule content, using conditional expressions to match user requests. This parameter is not required when adding a global configuration. There are two usage scenarios:
     * - Match all incoming requests: Set the value to true
     * - Match specific requests: Set the value to a custom expression, e.g., (http.host eq \\"video.example.com\\")
     *
     * @example (http.host eq \\"video.example.com\\")
     *
     * @var string
     */
    public $rule;

    /**
     * @description Rule switch. This parameter is not required when adding a global configuration. Possible values:
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $ruleEnable;

    /**
     * @description Rule name. This parameter is not required when adding a global configuration.
     *
     * @example rule_example
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description Rule execution order. The smaller the value, the higher the priority.
     *
     * @example 1
     *
     * @var int
     */
    public $sequence;

    /**
     * @description Serve stale cache. When enabled, the node can still respond to user requests with expired cached files even when the origin server is unavailable. Value range:
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $serveStale;

    /**
     * @description Site configuration version number. For sites with version management enabled, this parameter can specify the site version for which the configuration takes effect, defaulting to version 0.
     *
     * @example 1
     *
     * @var int
     */
    public $siteVersion;

    /**
     * @description Query string sorting. The value range is as follows:
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $sortQueryStringForCache;

    /**
     * @description Include the client device type when generating the cache key. The value range is as follows:
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $userDeviceType;

    /**
     * @description Include the client\\"s geographic location when generating the cache key. The value range is as follows:
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $userGeo;

    /**
     * @description Include the client\\"s language type when generating the cache key. The value range is as follows:
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $userLanguage;
    protected $_name = [
        'additionalCacheablePorts' => 'AdditionalCacheablePorts',
        'browserCacheMode' => 'BrowserCacheMode',
        'browserCacheTtl' => 'BrowserCacheTtl',
        'bypassCache' => 'BypassCache',
        'cacheDeceptionArmor' => 'CacheDeceptionArmor',
        'cacheReserveEligibility' => 'CacheReserveEligibility',
        'checkPresenceCookie' => 'CheckPresenceCookie',
        'checkPresenceHeader' => 'CheckPresenceHeader',
        'configId' => 'ConfigId',
        'configType' => 'ConfigType',
        'edgeCacheMode' => 'EdgeCacheMode',
        'edgeCacheTtl' => 'EdgeCacheTtl',
        'edgeStatusCodeCacheTtl' => 'EdgeStatusCodeCacheTtl',
        'includeCookie' => 'IncludeCookie',
        'includeHeader' => 'IncludeHeader',
        'queryString' => 'QueryString',
        'queryStringMode' => 'QueryStringMode',
        'rule' => 'Rule',
        'ruleEnable' => 'RuleEnable',
        'ruleName' => 'RuleName',
        'sequence' => 'Sequence',
        'serveStale' => 'ServeStale',
        'siteVersion' => 'SiteVersion',
        'sortQueryStringForCache' => 'SortQueryStringForCache',
        'userDeviceType' => 'UserDeviceType',
        'userGeo' => 'UserGeo',
        'userLanguage' => 'UserLanguage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalCacheablePorts) {
            $res['AdditionalCacheablePorts'] = $this->additionalCacheablePorts;
        }
        if (null !== $this->browserCacheMode) {
            $res['BrowserCacheMode'] = $this->browserCacheMode;
        }
        if (null !== $this->browserCacheTtl) {
            $res['BrowserCacheTtl'] = $this->browserCacheTtl;
        }
        if (null !== $this->bypassCache) {
            $res['BypassCache'] = $this->bypassCache;
        }
        if (null !== $this->cacheDeceptionArmor) {
            $res['CacheDeceptionArmor'] = $this->cacheDeceptionArmor;
        }
        if (null !== $this->cacheReserveEligibility) {
            $res['CacheReserveEligibility'] = $this->cacheReserveEligibility;
        }
        if (null !== $this->checkPresenceCookie) {
            $res['CheckPresenceCookie'] = $this->checkPresenceCookie;
        }
        if (null !== $this->checkPresenceHeader) {
            $res['CheckPresenceHeader'] = $this->checkPresenceHeader;
        }
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }
        if (null !== $this->edgeCacheMode) {
            $res['EdgeCacheMode'] = $this->edgeCacheMode;
        }
        if (null !== $this->edgeCacheTtl) {
            $res['EdgeCacheTtl'] = $this->edgeCacheTtl;
        }
        if (null !== $this->edgeStatusCodeCacheTtl) {
            $res['EdgeStatusCodeCacheTtl'] = $this->edgeStatusCodeCacheTtl;
        }
        if (null !== $this->includeCookie) {
            $res['IncludeCookie'] = $this->includeCookie;
        }
        if (null !== $this->includeHeader) {
            $res['IncludeHeader'] = $this->includeHeader;
        }
        if (null !== $this->queryString) {
            $res['QueryString'] = $this->queryString;
        }
        if (null !== $this->queryStringMode) {
            $res['QueryStringMode'] = $this->queryStringMode;
        }
        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }
        if (null !== $this->ruleEnable) {
            $res['RuleEnable'] = $this->ruleEnable;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }
        if (null !== $this->serveStale) {
            $res['ServeStale'] = $this->serveStale;
        }
        if (null !== $this->siteVersion) {
            $res['SiteVersion'] = $this->siteVersion;
        }
        if (null !== $this->sortQueryStringForCache) {
            $res['SortQueryStringForCache'] = $this->sortQueryStringForCache;
        }
        if (null !== $this->userDeviceType) {
            $res['UserDeviceType'] = $this->userDeviceType;
        }
        if (null !== $this->userGeo) {
            $res['UserGeo'] = $this->userGeo;
        }
        if (null !== $this->userLanguage) {
            $res['UserLanguage'] = $this->userLanguage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdditionalCacheablePorts'])) {
            $model->additionalCacheablePorts = $map['AdditionalCacheablePorts'];
        }
        if (isset($map['BrowserCacheMode'])) {
            $model->browserCacheMode = $map['BrowserCacheMode'];
        }
        if (isset($map['BrowserCacheTtl'])) {
            $model->browserCacheTtl = $map['BrowserCacheTtl'];
        }
        if (isset($map['BypassCache'])) {
            $model->bypassCache = $map['BypassCache'];
        }
        if (isset($map['CacheDeceptionArmor'])) {
            $model->cacheDeceptionArmor = $map['CacheDeceptionArmor'];
        }
        if (isset($map['CacheReserveEligibility'])) {
            $model->cacheReserveEligibility = $map['CacheReserveEligibility'];
        }
        if (isset($map['CheckPresenceCookie'])) {
            $model->checkPresenceCookie = $map['CheckPresenceCookie'];
        }
        if (isset($map['CheckPresenceHeader'])) {
            $model->checkPresenceHeader = $map['CheckPresenceHeader'];
        }
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }
        if (isset($map['EdgeCacheMode'])) {
            $model->edgeCacheMode = $map['EdgeCacheMode'];
        }
        if (isset($map['EdgeCacheTtl'])) {
            $model->edgeCacheTtl = $map['EdgeCacheTtl'];
        }
        if (isset($map['EdgeStatusCodeCacheTtl'])) {
            $model->edgeStatusCodeCacheTtl = $map['EdgeStatusCodeCacheTtl'];
        }
        if (isset($map['IncludeCookie'])) {
            $model->includeCookie = $map['IncludeCookie'];
        }
        if (isset($map['IncludeHeader'])) {
            $model->includeHeader = $map['IncludeHeader'];
        }
        if (isset($map['QueryString'])) {
            $model->queryString = $map['QueryString'];
        }
        if (isset($map['QueryStringMode'])) {
            $model->queryStringMode = $map['QueryStringMode'];
        }
        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }
        if (isset($map['RuleEnable'])) {
            $model->ruleEnable = $map['RuleEnable'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }
        if (isset($map['ServeStale'])) {
            $model->serveStale = $map['ServeStale'];
        }
        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }
        if (isset($map['SortQueryStringForCache'])) {
            $model->sortQueryStringForCache = $map['SortQueryStringForCache'];
        }
        if (isset($map['UserDeviceType'])) {
            $model->userDeviceType = $map['UserDeviceType'];
        }
        if (isset($map['UserGeo'])) {
            $model->userGeo = $map['UserGeo'];
        }
        if (isset($map['UserLanguage'])) {
            $model->userLanguage = $map['UserLanguage'];
        }

        return $model;
    }
}
