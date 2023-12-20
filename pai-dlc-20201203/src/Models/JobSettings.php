<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class JobSettings extends Model
{
    /**
     * @var mixed[]
     */
    public $advancedSettings;

    /**
     * @example 166924
     *
     * @var string
     */
    public $businessUserId;

    /**
     * @example SilkFlow
     *
     * @var string
     */
    public $caller;

    /**
     * @example 535.54.03
     *
     * @var string
     */
    public $driver;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableErrorMonitoringInAIMaster;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableOssAppend;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableRDMA;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableSanityCheck;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableTideResource;

    /**
     * @example --enable-log-hang-detection true
     *
     * @var string
     */
    public $errorMonitoringArgs;

    /**
     * @example 30
     *
     * @var int
     */
    public $jobReservedMinutes;

    /**
     * @example Always
     *
     * @var string
     */
    public $jobReservedPolicy;

    /**
     * @example AcceptQuotaOverSold
     *
     * @var string
     */
    public $oversoldType;

    /**
     * @example pid-123456
     *
     * @var string
     */
    public $pipelineId;

    /**
     * @example --sanity-check-timing=AfterJobFaultTolerant --sanity-check-timeout-ops=MarkJobFai
     *
     * @var string
     */
    public $sanityCheckArgs;

    /**
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'advancedSettings'                => 'AdvancedSettings',
        'businessUserId'                  => 'BusinessUserId',
        'caller'                          => 'Caller',
        'driver'                          => 'Driver',
        'enableErrorMonitoringInAIMaster' => 'EnableErrorMonitoringInAIMaster',
        'enableOssAppend'                 => 'EnableOssAppend',
        'enableRDMA'                      => 'EnableRDMA',
        'enableSanityCheck'               => 'EnableSanityCheck',
        'enableTideResource'              => 'EnableTideResource',
        'errorMonitoringArgs'             => 'ErrorMonitoringArgs',
        'jobReservedMinutes'              => 'JobReservedMinutes',
        'jobReservedPolicy'               => 'JobReservedPolicy',
        'oversoldType'                    => 'OversoldType',
        'pipelineId'                      => 'PipelineId',
        'sanityCheckArgs'                 => 'SanityCheckArgs',
        'tags'                            => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advancedSettings) {
            $res['AdvancedSettings'] = $this->advancedSettings;
        }
        if (null !== $this->businessUserId) {
            $res['BusinessUserId'] = $this->businessUserId;
        }
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->driver) {
            $res['Driver'] = $this->driver;
        }
        if (null !== $this->enableErrorMonitoringInAIMaster) {
            $res['EnableErrorMonitoringInAIMaster'] = $this->enableErrorMonitoringInAIMaster;
        }
        if (null !== $this->enableOssAppend) {
            $res['EnableOssAppend'] = $this->enableOssAppend;
        }
        if (null !== $this->enableRDMA) {
            $res['EnableRDMA'] = $this->enableRDMA;
        }
        if (null !== $this->enableSanityCheck) {
            $res['EnableSanityCheck'] = $this->enableSanityCheck;
        }
        if (null !== $this->enableTideResource) {
            $res['EnableTideResource'] = $this->enableTideResource;
        }
        if (null !== $this->errorMonitoringArgs) {
            $res['ErrorMonitoringArgs'] = $this->errorMonitoringArgs;
        }
        if (null !== $this->jobReservedMinutes) {
            $res['JobReservedMinutes'] = $this->jobReservedMinutes;
        }
        if (null !== $this->jobReservedPolicy) {
            $res['JobReservedPolicy'] = $this->jobReservedPolicy;
        }
        if (null !== $this->oversoldType) {
            $res['OversoldType'] = $this->oversoldType;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->sanityCheckArgs) {
            $res['SanityCheckArgs'] = $this->sanityCheckArgs;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JobSettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvancedSettings'])) {
            $model->advancedSettings = $map['AdvancedSettings'];
        }
        if (isset($map['BusinessUserId'])) {
            $model->businessUserId = $map['BusinessUserId'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['Driver'])) {
            $model->driver = $map['Driver'];
        }
        if (isset($map['EnableErrorMonitoringInAIMaster'])) {
            $model->enableErrorMonitoringInAIMaster = $map['EnableErrorMonitoringInAIMaster'];
        }
        if (isset($map['EnableOssAppend'])) {
            $model->enableOssAppend = $map['EnableOssAppend'];
        }
        if (isset($map['EnableRDMA'])) {
            $model->enableRDMA = $map['EnableRDMA'];
        }
        if (isset($map['EnableSanityCheck'])) {
            $model->enableSanityCheck = $map['EnableSanityCheck'];
        }
        if (isset($map['EnableTideResource'])) {
            $model->enableTideResource = $map['EnableTideResource'];
        }
        if (isset($map['ErrorMonitoringArgs'])) {
            $model->errorMonitoringArgs = $map['ErrorMonitoringArgs'];
        }
        if (isset($map['JobReservedMinutes'])) {
            $model->jobReservedMinutes = $map['JobReservedMinutes'];
        }
        if (isset($map['JobReservedPolicy'])) {
            $model->jobReservedPolicy = $map['JobReservedPolicy'];
        }
        if (isset($map['OversoldType'])) {
            $model->oversoldType = $map['OversoldType'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['SanityCheckArgs'])) {
            $model->sanityCheckArgs = $map['SanityCheckArgs'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
