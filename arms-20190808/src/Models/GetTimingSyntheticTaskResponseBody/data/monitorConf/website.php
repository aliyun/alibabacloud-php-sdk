<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitorConf;

use AlibabaCloud\Tea\Model;

class website extends Model
{
    /**
     * @description Specifies whether to automatically scroll up and down the screen to load a page. 0: No. 1: Yes. Default value: 0.
     *
     * @example 0
     *
     * @var int
     */
    public $automaticScrolling;

    /**
     * @description Specifies whether to create a custom header. 0: No. 1: The first packet is modified. 2: All packets are modified. Default value: 0.
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
     * @description When resolving a domain name (such as www.aliyun.com), if the resolved IP address or CNAME is not in the DNS hijacking whitelist, the user will fail to access or return a non-Aliyun target IP; if the IP or CNAME in the resolution result is in the DNS whitelist, it will be deemed that no DNS hijacking has occurred.
     *
     * For example: `www.aliyun.com:203.0.3.55|203.3.44.67`, which means that all IPs except 203.0.3.55 and 203.3.44.67 under the www.aliyun.com domain name are hijacked.
     * @example www.aliyun.com:203.0.3.55|203.3.44.67
     *
     * @var string
     */
    public $DNSHijackWhitelist;

    /**
     * @description Specifies whether to disable the cache. 0: No. 1: Yes. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $disableCache;

    /**
     * @description Specifies whether to accept compressed files based on the HTTP Accept-Encoding request header. 0: No. 1: Yes. Default value: 0.
     *
     * @example 0
     *
     * @var int
     */
    public $disableCompression;

    /**
     * @description If an element configured in the element blacklist appears during page loading, no request will be made to load the element.
     *
     * @example www.example.com/a.jpg
     *
     * @var string
     */
    public $elementBlacklist;

    /**
     * @description Specifies whether to exclude invalid IP addresses.
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
     * @description Identify elements: Set the total number of elements to browse the page.
     *
     * @example 0
     *
     * @var int
     */
    public $flowHijackJumpTimes;

    /**
     * @description Hijacking flag: Set the key information for matching. Fill in the hijacking judgment keyword or key element, and asterisks (*) are allowed.
     *
     * @example aliyun
     *
     * @var string
     */
    public $flowHijackLogo;

    /**
     * @description Specifies whether to ignore SSL certificate errors during browsing. 0: No. 1: Yes. Default value: 1.
     *
     * @example 0
     *
     * @var int
     */
    public $ignoreCertificateError;

    /**
     * @description The monitoring timeout period. Unit: milliseconds. Default value: 20000. Minimum value: 5000. Maximum value: 300000.
     *
     * @example 20000
     *
     * @var int
     */
    public $monitorTimeout;

    /**
     * @description If any element other than the domain name setting appears on the monitoring page, it means that the page has been tampered. Common manifestations include pop-up ads, floating ads, jumps, etc.
     *
     * Fill in the format: `domain name: element`. Elements support wildcards, and multiple elements can be filled in. Multiple elements are separated by vertical bars (|). For example: `www.aliyun.com:|/cc/bb/a.gif|/vv/bb/cc.jpg`, which means that all elements except the basic document, /cc/bb/a.gif and /vv/bb/cc.jpg under the www.aliyun.com domain name are considered to be tampered with.
     * @example www.aliyun.com:|/cc/bb/a.gif|/vv/bb/cc.jpg
     *
     * @var string
     */
    public $pageTamper;

    /**
     * @description Specifies whether to continue browsing after redirection. 0: No, 1:Yes. Default value: 1.
     *
     * @example 1
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
     * @description The destination URL.
     *
     * @example http://www.aliyun.com
     *
     * @var string
     */
    public $targetUrl;

    /**
     * @description The verification string is an arbitrary string in the source code of the monitoring page. If the source code returned by the client contains any string in the blacklist, an error 650 &quot;Verification string failed&quot; will be reported. Multiple strings are separated by vertical bars (|).
     *
     * @example error
     *
     * @var string
     */
    public $verifyStringBlacklist;

    /**
     * @description The verification string is an arbitrary string in the source code of the monitoring page. The source code returned by the client must contain all the strings in the whitelist, otherwise an error 650 &quot;Verification string failed&quot; will be reported. Multiple strings are separated by a vertical bar (|).
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
