<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMonitorDataResponseBody\monitorData;

use AlibabaCloud\Tea\Model;

class instanceMonitorData extends Model
{
    /**
     * @var int
     */
    public $BPSRead;

    /**
     * @var int
     */
    public $BPSWrite;

    /**
     * @var int
     */
    public $CPU;

    /**
     * @var float
     */
    public $CPUAdvanceCreditBalance;

    /**
     * @var float
     */
    public $CPUCreditBalance;

    /**
     * @var float
     */
    public $CPUCreditUsage;

    /**
     * @var float
     */
    public $CPUNotpaidSurplusCreditUsage;

    /**
     * @var int
     */
    public $IOPSRead;

    /**
     * @var int
     */
    public $IOPSWrite;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $internetBandwidth;

    /**
     * @var int
     */
    public $internetRX;

    /**
     * @var int
     */
    public $internetTX;

    /**
     * @var int
     */
    public $intranetBandwidth;

    /**
     * @var int
     */
    public $intranetRX;

    /**
     * @var int
     */
    public $intranetTX;

    /**
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
