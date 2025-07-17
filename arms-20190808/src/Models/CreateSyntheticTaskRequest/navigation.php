<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest;

use AlibabaCloud\Tea\Model;

class navigation extends Model
{
    /**
     * @description The whitelist for DNS hijacking.
     *
     * @example www.aliyun.com:202.0.3.55|203.3.44.67
     *
     * @var string
     */
    public $DNSHijackWhiteList;

    /**
     * @description The element blacklist.
     *
     * @example *.a.com
     *
     * @var string
     */
    public $elementBlacklist;

    /**
     * @description Specifies whether to execute ActiveX.
     *
     *   3: yes
     *   0: no
     *
     * >  This parameter is supported only by IE Full Elements.
     *
     * @example 3
     *
     * @var int
     */
    public $executeActiveX;

    /**
     * @description Specifies whether to run applets.
     *
     *   1: yes
     *   0: no
     *
     * >  This parameter is supported only by IE Full Elements.
     *
     * @example 1
     *
     * @var int
     */
    public $executeApplication;

    /**
     * @description Specifies whether to execute scripts.
     *
     *   1: yes
     *   0: no
     *
     * >  This parameter is supported only by IE Full Elements.
     *
     * @example 1
     *
     * @var int
     */
    public $executeScript;

    /**
     * @description Specifies whether to filter invalid IP addresses.
     *
     *   1: no
     *   0: yes
     *
     * @example 1
     *
     * @var int
     */
    public $filterInvalidIP;

    /**
     * @description The element that is used in DNS hijacking.
     *
     * @example 50
     *
     * @var int
     */
    public $flowHijackJumpTimes;

    /**
     * @description The tag that is used in DNS hijacking.
     *
     * @example test
     *
     * @var string
     */
    public $flowHijackLogo;

    /**
     * @description The timeout period of monitoring. Unit: seconds.
     *
     * @example 20
     *
     * @var string
     */
    public $monitorTimeout;

    /**
     * @description Specifies whether to automatically scroll up and down the screen to load a page.
     *
     *   1: yes
     *   0: no
     *
     * @example 1
     *
     * @var string
     */
    public $navAutomaticScrolling;

    /**
     * @description The method that is used to customize the header. Valid values:
     *
     *   0: disables the customer header.
     *   1: modifies the first package.
     *   2: modifies all packages.
     *
     * @example 0
     *
     * @var string
     */
    public $navCustomHeader;

    /**
     * @description The format of the custom header. You can specify multiple fields. Separate the fields with vertical bars (|).
     *
     * @example Host:www.example.com|Referer:www.example.com
     *
     * @var string
     */
    public $navCustomHeaderContent;

    /**
     * @description The custom host mode.
     *
     *   1: round robin
     *   0: random
     *
     * @example 1
     *
     * @var int
     */
    public $navCustomHost;

    /**
     * @description The custom host IP address. You can enter multiple IP addresses. Separate the IP addresses with commas (,).
     *
     * @example ipv4:192.168.2.1,192.168.2.5:img.a.com|192.168.2.1[8080]:img.a.com
     *
     * @var string
     */
    public $navCustomHostIp;

    /**
     * @description Specifies whether to disable caching.
     *
     *   1: disable
     *   0: enable
     *
     * @example 1
     *
     * @var int
     */
    public $navDisableCache;

    /**
     * @description Specifies whether to enable the feature of using the Accept-Encoding field to determine whether to accept compressed files.
     *
     *   1: disable
     *   0: enable
     *
     * @example 1
     *
     * @var string
     */
    public $navDisableCompression;

    /**
     * @description Specifies whether to ignore certificate errors during certificate verification in the SSL handshake and continue browsing.
     *
     *   1: ignore
     *   0: does not ignore
     *
     * @example 1
     *
     * @var int
     */
    public $navIgnoreCertificateError;

    /**
     * @description Specifies whether to continue browsing after a redirection occurs.
     *
     *   1: yes
     *   0: no
     *
     * @example 1
     *
     * @var int
     */
    public $navRedirection;

    /**
     * @description Specifies whether to return the elements on the page.
     *
     *   1: no. Returns the basic document data.
     *   2: yes. Returns all document data.
     *
     * @example 2
     *
     * @var int
     */
    public $navReturnElement;

    /**
     * @description The web page defacement.
     *
     * @example www.example.com:202.0.3.55|203.3.44.67
     *
     * @var string
     */
    public $pageTamper;

    /**
     * @description The process ID.
     *
     * @example ssh
     *
     * @var string
     */
    public $processName;

    /**
     * @description The domain name of the QUIC request element.
     *
     * >  This parameter is supported by all elements of only Chrome
     *
     * @example www.example.com
     *
     * @var string
     */
    public $QUICDomain;

    /**
     * @description The Quick UDP Internet Connections (QUIC) protocol version. Default value: 0. Valid values:
     * >  This parameter is supported by all elements of only Chrome
     * @example 0
     *
     * @var int
     */
    public $QUICVersion;

    /**
     * @description Specifies whether to return the request header.
     *
     *   0: does not return the response header.
     *   1: returns the basic document header.
     *   2: returns all headers.
     *
     * @example 0
     *
     * @var int
     */
    public $requestHeader;

    /**
     * @description The method that is used to return the response header. Valid values:
     *
     *   0: does not return the response header.
     *   1: returns the basic document header.
     *   2: returns all headers.
     *
     * @example 0
     *
     * @var int
     */
    public $responseHeader;

    /**
     * @description The time threshold that is used to define a slow element. Unit: seconds.
     *
     * @example 5
     *
     * @var float
     */
    public $slowElementThreshold;

    /**
     * @description The blacklist for string verification.
     *
     * @example Regex:*.example|expalme|
     *
     * @var string
     */
    public $verifyStringBlacklist;

    /**
     * @description The whitelist for string verification.
     *
     * @example Regex:*.example|expalme|
     *
     * @var string
     */
    public $verifyStringWhiteList;

    /**
     * @description The timeout period of waiting for the monitoring to complete.
     *
     * @example 15
     *
     * @var float
     */
    public $waitCompletionTime;
    protected $_name = [
        'DNSHijackWhiteList' => 'DNSHijackWhiteList',
        'elementBlacklist' => 'ElementBlacklist',
        'executeActiveX' => 'ExecuteActiveX',
        'executeApplication' => 'ExecuteApplication',
        'executeScript' => 'ExecuteScript',
        'filterInvalidIP' => 'FilterInvalidIP',
        'flowHijackJumpTimes' => 'FlowHijackJumpTimes',
        'flowHijackLogo' => 'FlowHijackLogo',
        'monitorTimeout' => 'MonitorTimeout',
        'navAutomaticScrolling' => 'NavAutomaticScrolling',
        'navCustomHeader' => 'NavCustomHeader',
        'navCustomHeaderContent' => 'NavCustomHeaderContent',
        'navCustomHost' => 'NavCustomHost',
        'navCustomHostIp' => 'NavCustomHostIp',
        'navDisableCache' => 'NavDisableCache',
        'navDisableCompression' => 'NavDisableCompression',
        'navIgnoreCertificateError' => 'NavIgnoreCertificateError',
        'navRedirection' => 'NavRedirection',
        'navReturnElement' => 'NavReturnElement',
        'pageTamper' => 'PageTamper',
        'processName' => 'ProcessName',
        'QUICDomain' => 'QUICDomain',
        'QUICVersion' => 'QUICVersion',
        'requestHeader' => 'RequestHeader',
        'responseHeader' => 'ResponseHeader',
        'slowElementThreshold' => 'SlowElementThreshold',
        'verifyStringBlacklist' => 'VerifyStringBlacklist',
        'verifyStringWhiteList' => 'VerifyStringWhiteList',
        'waitCompletionTime' => 'WaitCompletionTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DNSHijackWhiteList) {
            $res['DNSHijackWhiteList'] = $this->DNSHijackWhiteList;
        }
        if (null !== $this->elementBlacklist) {
            $res['ElementBlacklist'] = $this->elementBlacklist;
        }
        if (null !== $this->executeActiveX) {
            $res['ExecuteActiveX'] = $this->executeActiveX;
        }
        if (null !== $this->executeApplication) {
            $res['ExecuteApplication'] = $this->executeApplication;
        }
        if (null !== $this->executeScript) {
            $res['ExecuteScript'] = $this->executeScript;
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
        if (null !== $this->monitorTimeout) {
            $res['MonitorTimeout'] = $this->monitorTimeout;
        }
        if (null !== $this->navAutomaticScrolling) {
            $res['NavAutomaticScrolling'] = $this->navAutomaticScrolling;
        }
        if (null !== $this->navCustomHeader) {
            $res['NavCustomHeader'] = $this->navCustomHeader;
        }
        if (null !== $this->navCustomHeaderContent) {
            $res['NavCustomHeaderContent'] = $this->navCustomHeaderContent;
        }
        if (null !== $this->navCustomHost) {
            $res['NavCustomHost'] = $this->navCustomHost;
        }
        if (null !== $this->navCustomHostIp) {
            $res['NavCustomHostIp'] = $this->navCustomHostIp;
        }
        if (null !== $this->navDisableCache) {
            $res['NavDisableCache'] = $this->navDisableCache;
        }
        if (null !== $this->navDisableCompression) {
            $res['NavDisableCompression'] = $this->navDisableCompression;
        }
        if (null !== $this->navIgnoreCertificateError) {
            $res['NavIgnoreCertificateError'] = $this->navIgnoreCertificateError;
        }
        if (null !== $this->navRedirection) {
            $res['NavRedirection'] = $this->navRedirection;
        }
        if (null !== $this->navReturnElement) {
            $res['NavReturnElement'] = $this->navReturnElement;
        }
        if (null !== $this->pageTamper) {
            $res['PageTamper'] = $this->pageTamper;
        }
        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }
        if (null !== $this->QUICDomain) {
            $res['QUICDomain'] = $this->QUICDomain;
        }
        if (null !== $this->QUICVersion) {
            $res['QUICVersion'] = $this->QUICVersion;
        }
        if (null !== $this->requestHeader) {
            $res['RequestHeader'] = $this->requestHeader;
        }
        if (null !== $this->responseHeader) {
            $res['ResponseHeader'] = $this->responseHeader;
        }
        if (null !== $this->slowElementThreshold) {
            $res['SlowElementThreshold'] = $this->slowElementThreshold;
        }
        if (null !== $this->verifyStringBlacklist) {
            $res['VerifyStringBlacklist'] = $this->verifyStringBlacklist;
        }
        if (null !== $this->verifyStringWhiteList) {
            $res['VerifyStringWhiteList'] = $this->verifyStringWhiteList;
        }
        if (null !== $this->waitCompletionTime) {
            $res['WaitCompletionTime'] = $this->waitCompletionTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return navigation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DNSHijackWhiteList'])) {
            $model->DNSHijackWhiteList = $map['DNSHijackWhiteList'];
        }
        if (isset($map['ElementBlacklist'])) {
            $model->elementBlacklist = $map['ElementBlacklist'];
        }
        if (isset($map['ExecuteActiveX'])) {
            $model->executeActiveX = $map['ExecuteActiveX'];
        }
        if (isset($map['ExecuteApplication'])) {
            $model->executeApplication = $map['ExecuteApplication'];
        }
        if (isset($map['ExecuteScript'])) {
            $model->executeScript = $map['ExecuteScript'];
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
        if (isset($map['MonitorTimeout'])) {
            $model->monitorTimeout = $map['MonitorTimeout'];
        }
        if (isset($map['NavAutomaticScrolling'])) {
            $model->navAutomaticScrolling = $map['NavAutomaticScrolling'];
        }
        if (isset($map['NavCustomHeader'])) {
            $model->navCustomHeader = $map['NavCustomHeader'];
        }
        if (isset($map['NavCustomHeaderContent'])) {
            $model->navCustomHeaderContent = $map['NavCustomHeaderContent'];
        }
        if (isset($map['NavCustomHost'])) {
            $model->navCustomHost = $map['NavCustomHost'];
        }
        if (isset($map['NavCustomHostIp'])) {
            $model->navCustomHostIp = $map['NavCustomHostIp'];
        }
        if (isset($map['NavDisableCache'])) {
            $model->navDisableCache = $map['NavDisableCache'];
        }
        if (isset($map['NavDisableCompression'])) {
            $model->navDisableCompression = $map['NavDisableCompression'];
        }
        if (isset($map['NavIgnoreCertificateError'])) {
            $model->navIgnoreCertificateError = $map['NavIgnoreCertificateError'];
        }
        if (isset($map['NavRedirection'])) {
            $model->navRedirection = $map['NavRedirection'];
        }
        if (isset($map['NavReturnElement'])) {
            $model->navReturnElement = $map['NavReturnElement'];
        }
        if (isset($map['PageTamper'])) {
            $model->pageTamper = $map['PageTamper'];
        }
        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }
        if (isset($map['QUICDomain'])) {
            $model->QUICDomain = $map['QUICDomain'];
        }
        if (isset($map['QUICVersion'])) {
            $model->QUICVersion = $map['QUICVersion'];
        }
        if (isset($map['RequestHeader'])) {
            $model->requestHeader = $map['RequestHeader'];
        }
        if (isset($map['ResponseHeader'])) {
            $model->responseHeader = $map['ResponseHeader'];
        }
        if (isset($map['SlowElementThreshold'])) {
            $model->slowElementThreshold = $map['SlowElementThreshold'];
        }
        if (isset($map['VerifyStringBlacklist'])) {
            $model->verifyStringBlacklist = $map['VerifyStringBlacklist'];
        }
        if (isset($map['VerifyStringWhiteList'])) {
            $model->verifyStringWhiteList = $map['VerifyStringWhiteList'];
        }
        if (isset($map['WaitCompletionTime'])) {
            $model->waitCompletionTime = $map['WaitCompletionTime'];
        }

        return $model;
    }
}
