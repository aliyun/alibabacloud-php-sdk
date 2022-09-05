<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail;

use AlibabaCloud\Tea\Model;

class nav extends Model
{
    /**
     * @var string
     */
    public $dnsHijackWhitelist;

    /**
     * @var string
     */
    public $elementBlacklist;

    /**
     * @var int
     */
    public $executeActiveX;

    /**
     * @var int
     */
    public $executeApplet;

    /**
     * @var int
     */
    public $executeScript;

    /**
     * @var int
     */
    public $filterInvalidIP;

    /**
     * @var int
     */
    public $flowHijackJumpTimes;

    /**
     * @var string
     */
    public $flowHijackLogo;

    /**
     * @var int
     */
    public $monitorTimeout;

    /**
     * @var int
     */
    public $navAutomaticScrolling;

    /**
     * @var string
     */
    public $navCustomHeader;

    /**
     * @var string
     */
    public $navCustomHeaderContent;

    /**
     * @var int
     */
    public $navCustomHost;

    /**
     * @var string
     */
    public $navCustomHostIp;

    /**
     * @var int
     */
    public $navDisableCache;

    /**
     * @var int
     */
    public $navDisableCompression;

    /**
     * @var int
     */
    public $navIgnoreCertificateError;

    /**
     * @var int
     */
    public $navRedirect;

    /**
     * @var int
     */
    public $navReturnElement;

    /**
     * @var string
     */
    public $pageTampering;

    /**
     * @var string
     */
    public $processName;

    /**
     * @var string
     */
    public $quicDomain;

    /**
     * @var int
     */
    public $quicVersion;

    /**
     * @var int
     */
    public $requestHeader;

    /**
     * @var int
     */
    public $slowElementThreshold;

    /**
     * @var string
     */
    public $verifyStringBlacklist;

    /**
     * @var string
     */
    public $verifyStringWhitelist;

    /**
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
