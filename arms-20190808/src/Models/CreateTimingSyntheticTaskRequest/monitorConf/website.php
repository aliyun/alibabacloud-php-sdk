<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest\monitorConf;

use AlibabaCloud\Tea\Model;

class website extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $automaticScrolling;

    /**
     * @example 0
     *
     * @var int
     */
    public $customHeader;

    /**
     * @var string[]
     */
    public $customHeaderContent;

    /**
     * @var string
     */
    public $DNSHijackWhitelist;

    /**
     * @example 1
     *
     * @var int
     */
    public $disableCache;

    /**
     * @example 0
     *
     * @var int
     */
    public $disableCompression;

    /**
     * @var string
     */
    public $elementBlacklist;

    /**
     * @example 0
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
     * @example 1
     *
     * @var int
     */
    public $ignoreCertificateError;

    /**
     * @example 20000
     *
     * @var int
     */
    public $monitorTimeout;

    /**
     * @var string
     */
    public $pageTamper;

    /**
     * @example 1
     *
     * @var int
     */
    public $redirection;

    /**
     * @example 5000
     *
     * @var int
     */
    public $slowElementThreshold;

    /**
     * @example https://www.aliyun.com
     *
     * @var string
     */
    public $targetUrl;

    /**
     * @var string
     */
    public $verifyStringBlacklist;

    /**
     * @var string
     */
    public $verifyStringWhitelist;

    /**
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
