<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateCacheRuleRequest extends Model
{
    /**
     * @description Enable caching on specified ports. Value range: 8880, 2052, 2082, 2086, 2095, 2053, 2083, 2087, 2096
     *
     * @example 8880
     *
     * @var string
     */
    public $additionalCacheablePorts;

    /**
     * @description Browser cache mode. Possible values:
     * - no_cache: Do not cache.
     * - follow_origin: Follow the origin server\\"s cache policy.
     * - override_origin: Override the origin server\\"s cache policy.
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
     * @description Set the bypass cache mode. Possible values:
     * - cache_all: Cache all requests.
     * - bypass_all: Bypass cache for all requests.
     *
     * @example cache_all
     *
     * @var string
     */
    public $bypassCache;

    /**
     * @description Cache deception defense. Used to defend against web cache deception attacks; only the verified cache content will be cached. Value range:
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $cacheDeceptionArmor;

    /**
     * @description Cache retention eligibility. Used to control whether user requests bypass the cache retention node when returning to the origin. Possible values:
     * - bypass_cache_reserve: Requests bypass cache retention.
     * - eligible_for_cache_reserve: Eligible for cache retention.
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
     * @description Edge cache mode. Possible values:
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
     * @description Status code cache expiration time, in seconds.
     *
     * @example 300
     *
     * @var string
     */
    public $edgeStatusCodeCacheTtl;

    /**
     * @description When generating the cache key, add the specified cookie names and their values. Multiple values are supported, separated by spaces.
     *
     * @example cookie_exapmle
     *
     * @var string
     */
    public $includeCookie;

    /**
     * @description When generating the cache key, add the specified header names and their values. Multiple values are supported, separated by spaces.
     *
     * @example example
     *
     * @var string
     */
    public $includeHeader;

    /**
     * @description Query strings to be reserved or excluded. Multiple values are supported, separated by spaces.
     *
     * @example example
     *
     * @var string
     */
    public $queryString;

    /**
     * @description The processing mode for query strings when generating the cache key. Possible values:
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
     * @description Rule content, using conditional expressions to match user requests. This parameter is not required when adding a global configuration. There are two usage scenarios:
     * - Match all incoming requests: Set the value to true
     * - Match specific requests: Set the value to a custom expression, for example: (http.host eq \\"video.example.com\\")
     *
     * @example (http.host eq \\"video.example.com\\")
     *
     * @var string
     */
    public $rule;

    /**
     * @description Rule switch. This parameter is not required when adding a global configuration. Possible values:
     * - on: Enable.
     * - off: Disable.
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
     * @description Serve stale cache. When enabled, the node can still use the expired cached files to respond to user requests even if the origin server is unavailable. Value range:
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $serveStale;

    /**
     * @description Site ID, which can be obtained by calling the [ListSites](~~ListSites~~) interface.
     *
     * This parameter is required.
     *
     * @example 340035003106221
     *
     * @var int
     */
    public $siteId;

    /**
     * @description Version number of the site configuration. For sites with version management enabled, you can use this parameter to specify the version for the configuration to take effect. The default is version 0.
     *
     * @example 1
     *
     * @var int
     */
    public $siteVersion;

    /**
     * @description Query string sorting, disabled by default. Possible values:
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $sortQueryStringForCache;

    /**
     * @description When generating the cache key, include the client device type. Possible values:
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $userDeviceType;

    /**
     * @description Include the client\\"s geographical location when generating the cache key. Value range:
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $userGeo;

    /**
     * @description Include the client\\"s language type when generating the cache key. Value range:
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
        'serveStale' => 'ServeStale',
        'siteId' => 'SiteId',
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
        if (null !== $this->serveStale) {
            $res['ServeStale'] = $this->serveStale;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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
     * @return CreateCacheRuleRequest
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
        if (isset($map['ServeStale'])) {
            $model->serveStale = $map['ServeStale'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
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
