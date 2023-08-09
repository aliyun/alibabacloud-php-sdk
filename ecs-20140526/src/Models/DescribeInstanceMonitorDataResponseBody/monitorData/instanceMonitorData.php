<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMonitorDataResponseBody\monitorData;

use AlibabaCloud\Tea\Model;

class instanceMonitorData extends Model
{
    /**
     * @description The read bandwidth of the cloud disks (system disk and data disks). Unit: Byte/s.
     *
     * @example 1000
     *
     * @var int
     */
    public $BPSRead;

    /**
     * @description The write bandwidth of the cloud disks (system disk and data disks). Unit: Byte/s.
     *
     * @example 13585
     *
     * @var int
     */
    public $BPSWrite;

    /**
     * @description The vCPU utilization of the instance. Unit: percent (%).
     *
     * @example 2
     *
     * @var int
     */
    public $CPU;

    /**
     * @description The overdrawn CPU credits of the burstable instance.
     *
     * @example 0.4
     *
     * @var float
     */
    public $CPUAdvanceCreditBalance;

    /**
     * @description The total number of CPU credits of the burstable instance.
     *
     * @example 120
     *
     * @var float
     */
    public $CPUCreditBalance;

    /**
     * @description The number of CPU credits consumed by the burstable instance.
     *
     * @example 30
     *
     * @var float
     */
    public $CPUCreditUsage;

    /**
     * @description The unpaid overdrawn CPU credits.
     *
     * @example 0.5
     *
     * @var float
     */
    public $CPUNotpaidSurplusCreditUsage;

    /**
     * @description The number of read I/O operations per second on the cloud disks (system disk and data disks).
     *
     * @example 1000
     *
     * @var int
     */
    public $IOPSRead;

    /**
     * @description The number of write I/O operations per second on the cloud disks (system disk and data disks).
     *
     * @example 200
     *
     * @var int
     */
    public $IOPSWrite;

    /**
     * @description The instance ID.
     *
     * @example i-bp1a36962lrhj4****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The public bandwidth of the instance. Unit: Kbit/s.
     *
     * @example 10
     *
     * @var int
     */
    public $internetBandwidth;

    /**
     * @description The Internet traffic received by the instance during the period that is specified by the `Period` parameter. The period starts from the point in time that is specified by the `TimeStamp` parameter. Unit: Kbit.
     *
     * @example 122
     *
     * @var int
     */
    public $internetRX;

    /**
     * @description The Internet traffic sent by the instance during the period that is specified by the `Period` parameter. The period starts from the point in time that is specified by the `TimeStamp` parameter. Unit: Kbit.
     *
     * @example 343
     *
     * @var int
     */
    public $internetTX;

    /**
     * @description The internal bandwidth of the instance. Unit: Kbit/s.
     *
     * @example 10
     *
     * @var int
     */
    public $intranetBandwidth;

    /**
     * @description The internal data traffic received by the instance during the period that is specified by the `Period` parameter. The period starts from the point in time that is specified by the `TimeStamp` parameter. Unit: Kbit.
     *
     * @example 122
     *
     * @var int
     */
    public $intranetRX;

    /**
     * @description The internal data traffic sent by the instance during the period that is specified by the `Period` parameter. The period starts from the point in time that is specified by the `TimeStamp` parameter. Unit: Kbit.
     *
     * @example 343
     *
     * @var int
     */
    public $intranetTX;

    /**
     * @description The timestamp of the monitoring data.
     *
     * @example 2014-10-30T05:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'BPSRead'                      => 'BPSRead',
        'BPSWrite'                     => 'BPSWrite',
        'CPU'                          => 'CPU',
        'CPUAdvanceCreditBalance'      => 'CPUAdvanceCreditBalance',
        'CPUCreditBalance'             => 'CPUCreditBalance',
        'CPUCreditUsage'               => 'CPUCreditUsage',
        'CPUNotpaidSurplusCreditUsage' => 'CPUNotpaidSurplusCreditUsage',
        'IOPSRead'                     => 'IOPSRead',
        'IOPSWrite'                    => 'IOPSWrite',
        'instanceId'                   => 'InstanceId',
        'internetBandwidth'            => 'InternetBandwidth',
        'internetRX'                   => 'InternetRX',
        'internetTX'                   => 'InternetTX',
        'intranetBandwidth'            => 'IntranetBandwidth',
        'intranetRX'                   => 'IntranetRX',
        'intranetTX'                   => 'IntranetTX',
        'timeStamp'                    => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->BPSRead) {
            $res['BPSRead'] = $this->BPSRead;
        }
        if (null !== $this->BPSWrite) {
            $res['BPSWrite'] = $this->BPSWrite;
        }
        if (null !== $this->CPU) {
            $res['CPU'] = $this->CPU;
        }
        if (null !== $this->CPUAdvanceCreditBalance) {
            $res['CPUAdvanceCreditBalance'] = $this->CPUAdvanceCreditBalance;
        }
        if (null !== $this->CPUCreditBalance) {
            $res['CPUCreditBalance'] = $this->CPUCreditBalance;
        }
        if (null !== $this->CPUCreditUsage) {
            $res['CPUCreditUsage'] = $this->CPUCreditUsage;
        }
        if (null !== $this->CPUNotpaidSurplusCreditUsage) {
            $res['CPUNotpaidSurplusCreditUsage'] = $this->CPUNotpaidSurplusCreditUsage;
        }
        if (null !== $this->IOPSRead) {
            $res['IOPSRead'] = $this->IOPSRead;
        }
        if (null !== $this->IOPSWrite) {
            $res['IOPSWrite'] = $this->IOPSWrite;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->internetBandwidth) {
            $res['InternetBandwidth'] = $this->internetBandwidth;
        }
        if (null !== $this->internetRX) {
            $res['InternetRX'] = $this->internetRX;
        }
        if (null !== $this->internetTX) {
            $res['InternetTX'] = $this->internetTX;
        }
        if (null !== $this->intranetBandwidth) {
            $res['IntranetBandwidth'] = $this->intranetBandwidth;
        }
        if (null !== $this->intranetRX) {
            $res['IntranetRX'] = $this->intranetRX;
        }
        if (null !== $this->intranetTX) {
            $res['IntranetTX'] = $this->intranetTX;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceMonitorData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BPSRead'])) {
            $model->BPSRead = $map['BPSRead'];
        }
        if (isset($map['BPSWrite'])) {
            $model->BPSWrite = $map['BPSWrite'];
        }
        if (isset($map['CPU'])) {
            $model->CPU = $map['CPU'];
        }
        if (isset($map['CPUAdvanceCreditBalance'])) {
            $model->CPUAdvanceCreditBalance = $map['CPUAdvanceCreditBalance'];
        }
        if (isset($map['CPUCreditBalance'])) {
            $model->CPUCreditBalance = $map['CPUCreditBalance'];
        }
        if (isset($map['CPUCreditUsage'])) {
            $model->CPUCreditUsage = $map['CPUCreditUsage'];
        }
        if (isset($map['CPUNotpaidSurplusCreditUsage'])) {
            $model->CPUNotpaidSurplusCreditUsage = $map['CPUNotpaidSurplusCreditUsage'];
        }
        if (isset($map['IOPSRead'])) {
            $model->IOPSRead = $map['IOPSRead'];
        }
        if (isset($map['IOPSWrite'])) {
            $model->IOPSWrite = $map['IOPSWrite'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InternetBandwidth'])) {
            $model->internetBandwidth = $map['InternetBandwidth'];
        }
        if (isset($map['InternetRX'])) {
            $model->internetRX = $map['InternetRX'];
        }
        if (isset($map['InternetTX'])) {
            $model->internetTX = $map['InternetTX'];
        }
        if (isset($map['IntranetBandwidth'])) {
            $model->intranetBandwidth = $map['IntranetBandwidth'];
        }
        if (isset($map['IntranetRX'])) {
            $model->intranetRX = $map['IntranetRX'];
        }
        if (isset($map['IntranetTX'])) {
            $model->intranetTX = $map['IntranetTX'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
