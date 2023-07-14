<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest;

use AlibabaCloud\Tea\Model;

class navigation extends Model
{
    /**
     * @var string
     */
    public $DNSHijackWhiteList;

    /**
     * @var string
     */
    public $elementBlacklist;

    /**
     * @example 3
     *
     * @var int
     */
    public $executeActiveX;

    /**
     * @example 1
     *
     * @var int
     */
    public $executeApplication;

    /**
     * @example 1
     *
     * @var int
     */
    public $executeScript;

    /**
     * @example 1
     *
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
     * @example 20
     *
     * @var string
     */
    public $monitorTimeout;

    /**
     * @example 1
     *
     * @var string
     */
    public $navAutomaticScrolling;

    /**
     * @example 0
     *
     * @var string
     */
    public $navCustomHeader;

    /**
     * @example Host:www.example.com|Referer:www.example.com
     *
     * @var string
     */
    public $navCustomHeaderContent;

    /**
     * @example 1
     *
     * @var int
     */
    public $navCustomHost;

    /**
     * @example ipv4:192.168.2.1,192.168.2.5:img.a.com|192.168.2.1[8080]:img.a.com
     *
     * @var string
     */
    public $navCustomHostIp;

    /**
     * @example 1
     *
     * @var int
     */
    public $navDisableCache;

    /**
     * @example 1
     *
     * @var string
     */
    public $navDisableCompression;

    /**
     * @example 1
     *
     * @var int
     */
    public $navIgnoreCertificateError;

    /**
     * @example 1
     *
     * @var int
     */
    public $navRedirection;

    /**
     * @example 2
     *
     * @var int
     */
    public $navReturnElement;

    /**
     * @var string
     */
    public $pageTamper;

    /**
     * @example ssh
     *
     * @var string
     */
    public $processName;

    /**
     * @example www.example.com
     *
     * @var string
     */
    public $QUICDomain;

    /**
     * @example 0
     *
     * @var int
     */
    public $QUICVersion;

    /**
     * @example 0
     *
     * @var int
     */
    public $requestHeader;

    /**
     * @example 0
     *
     * @var int
     */
    public $responseHeader;

    /**
     * @example 5
     *
     * @var float
     */
    public $slowElementThreshold;

    /**
     * @var string
     */
    public $verifyStringBlacklist;

    /**
     * @var string
     */
    public $verifyStringWhiteList;

    /**
     * @var float
     */
    public $waitCompletionTime;
    protected $_name = [
        'DNSHijackWhiteList'        => 'DNSHijackWhiteList',
        'elementBlacklist'          => 'ElementBlacklist',
        'executeActiveX'            => 'ExecuteActiveX',
        'executeApplication'        => 'ExecuteApplication',
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
        'navRedirection'            => 'NavRedirection',
        'navReturnElement'          => 'NavReturnElement',
        'pageTamper'                => 'PageTamper',
        'processName'               => 'ProcessName',
        'QUICDomain'                => 'QUICDomain',
        'QUICVersion'               => 'QUICVersion',
        'requestHeader'             => 'RequestHeader',
        'responseHeader'            => 'ResponseHeader',
        'slowElementThreshold'      => 'SlowElementThreshold',
        'verifyStringBlacklist'     => 'VerifyStringBlacklist',
        'verifyStringWhiteList'     => 'VerifyStringWhiteList',
        'waitCompletionTime'        => 'WaitCompletionTime',
    ];

    public function validate()
    {
    }

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
