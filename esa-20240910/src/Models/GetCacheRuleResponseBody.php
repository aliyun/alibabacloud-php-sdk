<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetCacheRuleResponseBody extends Model
{
    /**
     * @description Enable caching on the specified ports. Value range: 8880, 2052, 2082, 2086, 2095, 2053, 2083, 2087, 2096.
     *
     * @example 2095
     *
     * @var string
     */
    public $additionalCacheablePorts;

    /**
     * @description Browser cache mode. Value range:
     * - no_cache: Do not cache.
     * - follow_origin: Follow origin cache policy.
     * - override_origin: Override origin cache policy.
     *
     * @example follow_origin
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
     * @description Set bypass cache mode. Value range:
     *
     * - cache_all: Cache all requests.
     * - bypass_all: Bypass cache for all requests.
     *
     * @example cache_all
     *
     * @var string
     */
    public $bypassCache;

    /**
     * @description Cache deception defense. Used to defend against web cache deception attacks. Only the verified cache content will be cached. Value range:
     *
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $cacheDeceptionArmor;

    /**
     * @description Cache reserve eligibility. Used to control whether user requests bypass the cache reserve node when returning to the origin. Value range:
     *
     * - bypass_cache_reserve: Requests bypass the cache reserve.
     * - eligible_for_cache_reserve: Eligible for cache reserve.
     *
     * @example bypass_cache_reserve
     *
     * @var string
     */
    public $cacheReserveEligibility;

    /**
     * @description When generating the cache key, check if the cookie exists. If it does, add the cookie name (cookie names are case-insensitive) to the cache key. Supports multiple cookie names, separated by spaces.
     *
     * @example cookiename
     *
     * @var string
     */
    public $checkPresenceCookie;

    /**
     * @description When generating the cache key, check if the header exists. If it does, add the header name (header names are case-insensitive) to the cache key. Supports multiple header names, separated by spaces.
     *
     * @example headername
     *
     * @var string
     */
    public $checkPresenceHeader;

    /**
     * @description Configuration ID.
     *
     * @example 352816096987136
     *
     * @var int
     */
    public $configId;

    /**
     * @description Configuration type, which can be used to query global or rule configurations. Value range:
     * - global: Query global configuration;
     * - rule: Query rule configuration;
     *
     * @example global
     *
     * @var string
     */
    public $configType;

    /**
     * @description Edge cache mode. Value range:
     * - follow_origin: Follow origin cache policy (if exists), otherwise use the default cache policy.
     * - no_cache: Do not cache.
     * - override_origin: Override origin cache policy.
     * - follow_origin_bypass: Follow origin cache policy (if exists), otherwise do not cache.
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
     * @description Status code cache expiration time, in seconds.
     *
     * @example 300
     *
     * @var string
     */
    public $edgeStatusCodeCacheTtl;

    /**
     * @description When generating the cache key, include the specified cookie names and their values. Supports multiple values, separated by spaces.
     *
     * @example cookie_exapmle
     *
     * @var string
     */
    public $includeCookie;

    /**
     * @description When generating the cache key, include the specified header names and their values. Supports multiple values, separated by spaces.
     *
     * @example example
     *
     * @var string
     */
    public $includeHeader;

    /**
     * @description The query strings to be retained or deleted, supporting multiple values separated by spaces.
     *
     * @example example
     *
     * @var string
     */
    public $queryString;

    /**
     * @description The processing mode for query strings when generating cache keys. Value range:
     *
     * - ignore_all: Ignore all.
     * - exclude_query_string: Exclude specified query strings.
     * - reserve_all: Default, reserve all.
     * - include_query_string: Include specified query strings.
     *
     * @example reserve_all
     *
     * @var string
     */
    public $queryStringMode;

    /**
     * @description Request ID.
     *
     * @example 36af3fcc-43d0-441c-86b1-428951dc8225
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Rule content, using conditional expressions to match user requests. This parameter does not need to be set when adding a global configuration. There are two usage scenarios:
     * - Match all incoming requests: Set the value to true
     * - Match specific requests: Set the value to a custom expression, for example: (http.host eq \\"video.example.com\\")
     *
     * @example (http.host eq \\"video.example.com\\")
     *
     * @var string
     */
    public $rule;

    /**
     * @description Rule switch. This parameter does not need to be set when adding a global configuration. Value range:
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $ruleEnable;

    /**
     * @description Rule name. This parameter does not need to be set when adding a global configuration.
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
     * @description Serve stale cache. When enabled, the node can still use the cached expired files to respond to user requests even if the origin server is unavailable. Value range:
     *
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $serveStale;

    /**
     * @description Version number of the site configuration. For sites with version management enabled, you can use this parameter to specify the effective version of the configuration, defaulting to version 0.
     *
     * @example 1
     *
     * @var int
     */
    public $siteVersion;

    /**
     * @description Query string sorting. Value range:
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $sortQueryStringForCache;

    /**
     * @description When generating the cache key, include the client device type. Value range:
     *
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $userDeviceType;

    /**
     * @description When generating the cache key, include the client\\"s geographic location. Value range:
     *
     * - on: Enabled.
     * - off: Disabled.
     *
     * @example on
     *
     * @var string
     */
    public $userGeo;

    /**
     * @description When generating the cache key, include the client\\"s language type. Value range:
     *
     * - on: Enabled.
     * - off: Disabled.
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
        'requestId' => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return GetCacheRuleResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
