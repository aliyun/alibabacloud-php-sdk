<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail;

use AlibabaCloud\Tea\Model;

class nav extends Model
{
    /**
     * @description The DNS whitelist.
     *
     * @example 119.119.53.156
     *
     * @var string
     */
    public $dnsHijackWhitelist;

    /**
     * @description The element blacklist.
     *
     * @example test
     *
     * @var string
     */
    public $elementBlacklist;

    /**
     * @description Indicates whether ActiveX is executed. Valid values:
     *
     *   3: yes
     *   0: no
     *
     * >  Only IE elements support this parameter.
     * @example 3
     *
     * @var int
     */
    public $executeActiveX;

    /**
     * @description Indicates whether the applet is executed. Valid values:
     *
     *   0: no
     *   1: yes
     *
     * @example 1
     *
     * @var int
     */
    public $executeApplet;

    /**
     * @description Indicates whether scripts are executed. Valid values:
     *
     *   1: yes
     *   0: no
     *
     * >  Only IE elements support this parameter.
     * @example 1
     *
     * @var int
     */
    public $executeScript;

    /**
     * @description Indicates whether invalid IP addresses are excluded. Valid values:
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
     * @example 12
     *
     * @var int
     */
    public $flowHijackJumpTimes;

    /**
     * @description The tag that is used in DNS hijacking.
     *
     * @example target
     *
     * @var string
     */
    public $flowHijackLogo;

    /**
     * @description The monitoring timeout period.
     *
     * @example 20
     *
     * @var int
     */
    public $monitorTimeout;

    /**
     * @description Indicates whether the screen is automatically scrolled up and down to load a page. Valid values:
     *
     *   1: yes
     *   0: no
     *
     * @example 1
     *
     * @var int
     */
    public $navAutomaticScrolling;

    /**
     * @description Indicates whether a custom header is created. Valid values:
     *
     *   0: no
     *   1: A custom header is created for the first packet.
     *   2: A custom header is created for all packets.
     *
     * @example 0
     *
     * @var string
     */
    public $navCustomHeader;

    /**
     * @description The format of the custom header. Multiple fields are separated with vertical bars (|).
     *
     * @example content
     *
     * @var string
     */
    public $navCustomHeaderContent;

    /**
     * @description The custom host mode. Valid values:
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
     * @description The custom IP address of the host. Multiple IP addresses are separated with commas (,).
     *
     * @example 119.119.53.156/32
     *
     * @var string
     */
    public $navCustomHostIp;

    /**
     * @description Indicates whether caching is disabled. Valid values:
     *
     *   1: Caching is disabled.
     *   0: Caching is enabled.
     *
     * @example 1
     *
     * @var int
     */
    public $navDisableCache;

    /**
     * @description Indicates whether compression is disabled. Valid values:
     *
     *   0: Compression is enabled.
     *   1: Compression is disabled.
     *
     * @example 0
     *
     * @var int
     */
    public $navDisableCompression;

    /**
     * @description Indicates whether certificate errors are ignored during certificate verification in the SSL handshake. Valid values:
     *
     *   1: yes
     *   0: no
     *
     * @example 1
     *
     * @var int
     */
    public $navIgnoreCertificateError;

    /**
     * @description Indicates whether redirection is enabled. Valid values:
     *
     *   0: no
     *   1: yes
     *
     * @example 1
     *
     * @var int
     */
    public $navRedirect;

    /**
     * @description Indicates whether the elements on the page are returned.
     *
     *   1: no. The basic document data is returned.
     *   2: yes. All document data is returned.
     *
     * @example 1
     *
     * @var int
     */
    public $navReturnElement;

    /**
     * @description The page tampering.
     *
     * @example content
     *
     * @var string
     */
    public $pageTampering;

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
     * @example www.example.com
     *
     * @var string
     */
    public $quicDomain;

    /**
     * @description The QUIC version. Default value: 0. Valid values:
     *
     *   35
     *   39
     *   43
     *   44
     *
     * >  Only Chrome elements support this parameter.
     * @example 0
     *
     * @var int
     */
    public $quicVersion;

    /**
     * @description Indicates whether request headers are returned. Valid values:
     *
     *   0: no
     *   1: The headers of base documents are returned.
     *   2: All headers are returned.
     *
     * @example 0
     *
     * @var int
     */
    public $requestHeader;

    /**
     * @description The time threshold that is used to define a slow element. Unit: seconds.
     *
     * @example 30
     *
     * @var int
     */
    public $slowElementThreshold;

    /**
     * @description The blacklist for string verification.
     *
     * @example test
     *
     * @var string
     */
    public $verifyStringBlacklist;

    /**
     * @description The whitelist for string verification.
     *
     * @example test
     *
     * @var string
     */
    public $verifyStringWhitelist;

    /**
     * @description The timeout period of waiting for the monitoring to complete.
     *
     * @example 20
     *
     * @var int
     */
    public $waitCompletionTime;
    protected $_name = [
        'dnsHijackWhitelist'        => 'DnsHijackWhitelist',
        'elementBlacklist'          => 'ElementBlacklist',
        'executeActiveX'            => 'ExecuteActiveX',
        'executeApplet'             => 'ExecuteApplet',
        'executeScript'             => 'ExecuteScript',
        'filterInvalidIP'           => 'FilterInvalidIP',
        'flowHijackJumpTimes'       => 'FlowHijackJumpTimes',
        'flowHijackLogo'            => 'FlowHijackLogo',
        'monitorTimeout'            => 'MonitorTimeout',
        'navAutomaticScrolling'     => 'NavAutomaticScrolling',
        'navCustomHeader'           => 'NavCustomHeader',
        'navCustomHeaderContent'    => 'NavCustomHeaderContent',
        'navCustomHost'             => 'NavCustomHost',
        'navCustomHostIp'           => 'NavCustomHostIp',
        'navDisableCache'           => 'NavDisableCache',
        'navDisableCompression'     => 'NavDisableCompression',
        'navIgnoreCertificateError' => 'NavIgnoreCertificateError',
        'navRedirect'               => 'NavRedirect',
        'navReturnElement'          => 'NavReturnElement',
        'pageTampering'             => 'PageTampering',
        'processName'               => 'ProcessName',
        'quicDomain'                => 'QuicDomain',
        'quicVersion'               => 'QuicVersion',
        'requestHeader'             => 'RequestHeader',
        'slowElementThreshold'      => 'SlowElementThreshold',
        'verifyStringBlacklist'     => 'VerifyStringBlacklist',
        'verifyStringWhitelist'     => 'VerifyStringWhitelist',
        'waitCompletionTime'        => 'WaitCompletionTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dnsHijackWhitelist) {
            $res['DnsHijackWhitelist'] = $this->dnsHijackWhitelist;
        }
        if (null !== $this->elementBlacklist) {
            $res['ElementBlacklist'] = $this->elementBlacklist;
        }
        if (null !== $this->executeActiveX) {
            $res['ExecuteActiveX'] = $this->executeActiveX;
        }
        if (null !== $this->executeApplet) {
            $res['ExecuteApplet'] = $this->executeApplet;
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
        if (null !== $this->navRedirect) {
            $res['NavRedirect'] = $this->navRedirect;
        }
        if (null !== $this->navReturnElement) {
            $res['NavReturnElement'] = $this->navReturnElement;
        }
        if (null !== $this->pageTampering) {
            $res['PageTampering'] = $this->pageTampering;
        }
        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }
        if (null !== $this->quicDomain) {
            $res['QuicDomain'] = $this->quicDomain;
        }
        if (null !== $this->quicVersion) {
            $res['QuicVersion'] = $this->quicVersion;
        }
        if (null !== $this->requestHeader) {
            $res['RequestHeader'] = $this->requestHeader;
        }
        if (null !== $this->slowElementThreshold) {
            $res['SlowElementThreshold'] = $this->slowElementThreshold;
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
     * @return nav
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DnsHijackWhitelist'])) {
            $model->dnsHijackWhitelist = $map['DnsHijackWhitelist'];
        }
        if (isset($map['ElementBlacklist'])) {
            $model->elementBlacklist = $map['ElementBlacklist'];
        }
        if (isset($map['ExecuteActiveX'])) {
            $model->executeActiveX = $map['ExecuteActiveX'];
        }
        if (isset($map['ExecuteApplet'])) {
            $model->executeApplet = $map['ExecuteApplet'];
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
        if (isset($map['NavRedirect'])) {
            $model->navRedirect = $map['NavRedirect'];
        }
        if (isset($map['NavReturnElement'])) {
            $model->navReturnElement = $map['NavReturnElement'];
        }
        if (isset($map['PageTampering'])) {
            $model->pageTampering = $map['PageTampering'];
        }
        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }
        if (isset($map['QuicDomain'])) {
            $model->quicDomain = $map['QuicDomain'];
        }
        if (isset($map['QuicVersion'])) {
            $model->quicVersion = $map['QuicVersion'];
        }
        if (isset($map['RequestHeader'])) {
            $model->requestHeader = $map['RequestHeader'];
        }
        if (isset($map['SlowElementThreshold'])) {
            $model->slowElementThreshold = $map['SlowElementThreshold'];
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
