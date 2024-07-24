<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateTimingSyntheticTaskRequest\monitorConf;

use AlibabaCloud\Tea\Model;

class website extends Model
{
    /**
     * @description Specifies whether to automatically scroll up and down the screen to load a page. Valid values: 0: No. 1: Yes. Default value: 0.
     *
     * @example 0
     *
     * @var int
     */
    public $automaticScrolling;

    /**
     * @description Specifies whether to create a custom header. Valid values: 0: No. 1: The first packet is modified. 2: All packets are modified. Default value: 0.
     *
     * @example 0
     *
     * @var int
     */
    public $customHeader;

    /**
     * @description The custom header. Format: JSON map.
     *
     * @var string[]
     */
    public $customHeaderContent;

    /**
     * @description If the IP address or CNAME record resolved from a domain name is not included in the DNS whitelist, you cannot access the domain name, or an IP address that belongs to a different domain name is returned. If the IP address or CNAME record is included in the DNS whitelist, DNS hijacking does not occur.
     *
     * Format: \\<domain name>:\\<objects>. The objects can be IP addresses, wildcard mask, subnet mask, or CNAME records. Separate multiple objects with vertical bars (|). Example: www.aliyun.com:203.0.3.55|203.3.44.67. It indicates that all IP addresses that belong to the www.aliyun.com domain name except 203.0.3.55 and 203.3.44.67 are hijacked.
     * @example www.aliyun.com:203.0.3.55|203.3.44.67
     *
     * @var string
     */
    public $DNSHijackWhitelist;

    /**
     * @description Specifies whether to disable the cache. Valid values: 0: No. 1: Yes. Default value: 1.
     *
     * @example 0
     *
     * @var int
     */
    public $disableCache;

    /**
     * @description Specifies whether to accept compressed files based on the HTTP Accept-Encoding request header. Valid values: 0: No. 1: Yes. Default value: 0.
     *
     * @example 0
     *
     * @var int
     */
    public $disableCompression;

    /**
     * @description The elements not to be loaded in the page loading process.
     *
     * @example a.jpg
     *
     * @var string
     */
    public $elementBlacklist;

    /**
     * @description Specifies whether to exclude invalid IP addresses. Valid values:
     *
     *   1: No
     *   0: Yes
     *
     * @example 0
     *
     * @var int
     */
    public $filterInvalidIP;

    /**
     * @description The total number of elements on the page.
     *
     * @example 1
     *
     * @var int
     */
    public $flowHijackJumpTimes;

    /**
     * @description The keyword that is used to identify hijacking. Asterisks (\\*) are allowed.
     *
     * @example aliyun
     *
     * @var string
     */
    public $flowHijackLogo;

    /**
     * @description Specifies whether to ignore SSL certificate errors during browsing. Valid values: 0: No. 1: Yes. Default value: 1.
     *
     * @example 0
     *
     * @var int
     */
    public $ignoreCertificateError;

    /**
     * @description The monitoring timeout period. Unit: milliseconds. Minimum value: 5000. Maximum value: 300000. Default value: 40000.
     *
     * @example 20000
     *
     * @var int
     */
    public $monitorTimeout;

    /**
     * @description Elements that are not included in the whitelist and appear on the page are manipulated. These elements can be pop-up ads, floating ads, and page redirection.
     *
     * @example www.aliyun.com:|/cc/bb/a.gif|/vv/bb/cc.jpg
     *
     * @var string
     */
    public $pageTamper;

    /**
     * @description Specifies whether to continue browsing after redirection. Valid values: 0: No. 1:Yes. Default value: 1.
     *
     * @example 0
     *
     * @var int
     */
    public $redirection;

    /**
     * @description The time threshold that is used to define a slow element. Unit: milliseconds. Default value: 5000. Minimum value: 1. Maximum value: 300000.
     *
     * @example 5000
     *
     * @var int
     */
    public $slowElementThreshold;

    /**
     * @description The URL of the website.
     *
     * @example https://********
     *
     * @var string
     */
    public $targetUrl;

    /**
     * @description An arbitrary string in the source code of the page for verification. If the source code returned by the client contains a string that is in the blacklist, the 650 error code is reported, which indicates that the string fails to be verified. Separate multiple strings with vertical bars (|).
     *
     * @example error
     *
     * @var string
     */
    public $verifyStringBlacklist;

    /**
     * @description An arbitrary string in the source code of the page for verification. If the source code returned by the client contains a string that is not in the whitelist, the 650 error code is reported, which indicates that the string fails to be verified. Separate multiple strings with vertical bars (|).
     *
     * @example success
     *
     * @var string
     */
    public $verifyStringWhitelist;

    /**
     * @description The maximum waiting time. Unit: milliseconds. Default value: 5000. Minimum value: 5000. Maximum value: 300000.
     *
     * @example 5000
     *
     * @var int
     */
    public $waitCompletionTime;
    protected $_name = [
        'automaticScrolling'     => 'AutomaticScrolling',
        'customHeader'           => 'CustomHeader',
        'customHeaderContent'    => 'CustomHeaderContent',
        'DNSHijackWhitelist'     => 'DNSHijackWhitelist',
        'disableCache'           => 'DisableCache',
        'disableCompression'     => 'DisableCompression',
        'elementBlacklist'       => 'ElementBlacklist',
        'filterInvalidIP'        => 'FilterInvalidIP',
        'flowHijackJumpTimes'    => 'FlowHijackJumpTimes',
        'flowHijackLogo'         => 'FlowHijackLogo',
        'ignoreCertificateError' => 'IgnoreCertificateError',
        'monitorTimeout'         => 'MonitorTimeout',
        'pageTamper'             => 'PageTamper',
        'redirection'            => 'Redirection',
        'slowElementThreshold'   => 'SlowElementThreshold',
        'targetUrl'              => 'TargetUrl',
        'verifyStringBlacklist'  => 'VerifyStringBlacklist',
        'verifyStringWhitelist'  => 'VerifyStringWhitelist',
        'waitCompletionTime'     => 'WaitCompletionTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->automaticScrolling) {
            $res['AutomaticScrolling'] = $this->automaticScrolling;
        }
        if (null !== $this->customHeader) {
            $res['CustomHeader'] = $this->customHeader;
        }
        if (null !== $this->customHeaderContent) {
            $res['CustomHeaderContent'] = $this->customHeaderContent;
        }
        if (null !== $this->DNSHijackWhitelist) {
            $res['DNSHijackWhitelist'] = $this->DNSHijackWhitelist;
        }
        if (null !== $this->disableCache) {
            $res['DisableCache'] = $this->disableCache;
        }
        if (null !== $this->disableCompression) {
            $res['DisableCompression'] = $this->disableCompression;
        }
        if (null !== $this->elementBlacklist) {
            $res['ElementBlacklist'] = $this->elementBlacklist;
        }
        if (null !== $this->filterInvalidIP) {
            $res['FilterInvalidIP'] = $this->filterInvalidIP;
        }
        if (null !== $this->flowHijackJumpTimes) {
            $res['FlowHijackJumpTimes'] = $this->flowHijackJumpTimes;
        }
        if (null !== $this->flowHijackLogo) {
            $res['FlowHijackLogo'] = $this->flowHijackLogo;
        }
        if (null !== $this->ignoreCertificateError) {
            $res['IgnoreCertificateError'] = $this->ignoreCertificateError;
        }
        if (null !== $this->monitorTimeout) {
            $res['MonitorTimeout'] = $this->monitorTimeout;
        }
        if (null !== $this->pageTamper) {
            $res['PageTamper'] = $this->pageTamper;
        }
        if (null !== $this->redirection) {
            $res['Redirection'] = $this->redirection;
        }
        if (null !== $this->slowElementThreshold) {
            $res['SlowElementThreshold'] = $this->slowElementThreshold;
        }
        if (null !== $this->targetUrl) {
            $res['TargetUrl'] = $this->targetUrl;
        }
        if (null !== $this->verifyStringBlacklist) {
            $res['VerifyStringBlacklist'] = $this->verifyStringBlacklist;
        }
        if (null !== $this->verifyStringWhitelist) {
            $res['VerifyStringWhitelist'] = $this->verifyStringWhitelist;
        }
        if (null !== $this->waitCompletionTime) {
            $res['WaitCompletionTime'] = $this->waitCompletionTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return website
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutomaticScrolling'])) {
            $model->automaticScrolling = $map['AutomaticScrolling'];
        }
        if (isset($map['CustomHeader'])) {
            $model->customHeader = $map['CustomHeader'];
        }
        if (isset($map['CustomHeaderContent'])) {
            $model->customHeaderContent = $map['CustomHeaderContent'];
        }
        if (isset($map['DNSHijackWhitelist'])) {
            $model->DNSHijackWhitelist = $map['DNSHijackWhitelist'];
        }
        if (isset($map['DisableCache'])) {
            $model->disableCache = $map['DisableCache'];
        }
        if (isset($map['DisableCompression'])) {
            $model->disableCompression = $map['DisableCompression'];
        }
        if (isset($map['ElementBlacklist'])) {
            $model->elementBlacklist = $map['ElementBlacklist'];
        }
        if (isset($map['FilterInvalidIP'])) {
            $model->filterInvalidIP = $map['FilterInvalidIP'];
        }
        if (isset($map['FlowHijackJumpTimes'])) {
            $model->flowHijackJumpTimes = $map['FlowHijackJumpTimes'];
        }
        if (isset($map['FlowHijackLogo'])) {
            $model->flowHijackLogo = $map['FlowHijackLogo'];
        }
        if (isset($map['IgnoreCertificateError'])) {
            $model->ignoreCertificateError = $map['IgnoreCertificateError'];
        }
        if (isset($map['MonitorTimeout'])) {
            $model->monitorTimeout = $map['MonitorTimeout'];
        }
        if (isset($map['PageTamper'])) {
            $model->pageTamper = $map['PageTamper'];
        }
        if (isset($map['Redirection'])) {
            $model->redirection = $map['Redirection'];
        }
        if (isset($map['SlowElementThreshold'])) {
            $model->slowElementThreshold = $map['SlowElementThreshold'];
        }
        if (isset($map['TargetUrl'])) {
            $model->targetUrl = $map['TargetUrl'];
        }
        if (isset($map['VerifyStringBlacklist'])) {
            $model->verifyStringBlacklist = $map['VerifyStringBlacklist'];
        }
        if (isset($map['VerifyStringWhitelist'])) {
            $model->verifyStringWhitelist = $map['VerifyStringWhitelist'];
        }
        if (isset($map['WaitCompletionTime'])) {
            $model->waitCompletionTime = $map['WaitCompletionTime'];
        }

        return $model;
    }
}
