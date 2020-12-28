<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMonitorDataResponseBody;

use AlibabaCloud\Tea\Model;

class monitorData extends Model
{
    /**
     * @var float
     */
    public $CPUCreditBalance;

    /**
     * @var int
     */
    public $BPSRead;

    /**
     * @var int
     */
    public $internetTX;

    /**
     * @var int
     */
    public $CPU;

    /**
     * @var float
     */
    public $CPUCreditUsage;

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
    public $intranetTX;

    /**
     * @var int
     */
    public $BPSWrite;

    /**
     * @var float
     */
    public $CPUNotpaidSurplusCreditUsage;

    /**
     * @var int
     */
    public $IOPSRead;

    /**
     * @var float
     */
    public $CPUAdvanceCreditBalance;

    /**
     * @var int
     */
    public $internetBandwidth;

    /**
     * @var int
     */
    public $internetRX;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var int
     */
    public $intranetRX;

    /**
     * @var int
     */
    public $intranetBandwidth;
    protected $_name = [
        'CPUCreditBalance'             => 'CPUCreditBalance',
        'BPSRead'                      => 'BPSRead',
        'internetTX'                   => 'InternetTX',
        'CPU'                          => 'CPU',
        'CPUCreditUsage'               => 'CPUCreditUsage',
        'IOPSWrite'                    => 'IOPSWrite',
        'instanceId'                   => 'InstanceId',
        'intranetTX'                   => 'IntranetTX',
        'BPSWrite'                     => 'BPSWrite',
        'CPUNotpaidSurplusCreditUsage' => 'CPUNotpaidSurplusCreditUsage',
        'IOPSRead'                     => 'IOPSRead',
        'CPUAdvanceCreditBalance'      => 'CPUAdvanceCreditBalance',
        'internetBandwidth'            => 'InternetBandwidth',
        'internetRX'                   => 'InternetRX',
        'timeStamp'                    => 'TimeStamp',
        'intranetRX'                   => 'IntranetRX',
        'intranetBandwidth'            => 'IntranetBandwidth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CPUCreditBalance) {
            $res['CPUCreditBalance'] = $this->CPUCreditBalance;
        }
        if (null !== $this->BPSRead) {
            $res['BPSRead'] = $this->BPSRead;
        }
        if (null !== $this->internetTX) {
            $res['InternetTX'] = $this->internetTX;
        }
        if (null !== $this->CPU) {
            $res['CPU'] = $this->CPU;
        }
        if (null !== $this->CPUCreditUsage) {
            $res['CPUCreditUsage'] = $this->CPUCreditUsage;
        }
        if (null !== $this->IOPSWrite) {
            $res['IOPSWrite'] = $this->IOPSWrite;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->intranetTX) {
            $res['IntranetTX'] = $this->intranetTX;
        }
        if (null !== $this->BPSWrite) {
            $res['BPSWrite'] = $this->BPSWrite;
        }
        if (null !== $this->CPUNotpaidSurplusCreditUsage) {
            $res['CPUNotpaidSurplusCreditUsage'] = $this->CPUNotpaidSurplusCreditUsage;
        }
        if (null !== $this->IOPSRead) {
            $res['IOPSRead'] = $this->IOPSRead;
        }
        if (null !== $this->CPUAdvanceCreditBalance) {
            $res['CPUAdvanceCreditBalance'] = $this->CPUAdvanceCreditBalance;
        }
        if (null !== $this->internetBandwidth) {
            $res['InternetBandwidth'] = $this->internetBandwidth;
        }
        if (null !== $this->internetRX) {
            $res['InternetRX'] = $this->internetRX;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->intranetRX) {
            $res['IntranetRX'] = $this->intranetRX;
        }
        if (null !== $this->intranetBandwidth) {
            $res['IntranetBandwidth'] = $this->intranetBandwidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitorData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CPUCreditBalance'])) {
            $model->CPUCreditBalance = $map['CPUCreditBalance'];
        }
        if (isset($map['BPSRead'])) {
            $model->BPSRead = $map['BPSRead'];
        }
        if (isset($map['InternetTX'])) {
            $model->internetTX = $map['InternetTX'];
        }
        if (isset($map['CPU'])) {
            $model->CPU = $map['CPU'];
        }
        if (isset($map['CPUCreditUsage'])) {
            $model->CPUCreditUsage = $map['CPUCreditUsage'];
        }
        if (isset($map['IOPSWrite'])) {
            $model->IOPSWrite = $map['IOPSWrite'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IntranetTX'])) {
            $model->intranetTX = $map['IntranetTX'];
        }
        if (isset($map['BPSWrite'])) {
            $model->BPSWrite = $map['BPSWrite'];
        }
        if (isset($map['CPUNotpaidSurplusCreditUsage'])) {
            $model->CPUNotpaidSurplusCreditUsage = $map['CPUNotpaidSurplusCreditUsage'];
        }
        if (isset($map['IOPSRead'])) {
            $model->IOPSRead = $map['IOPSRead'];
        }
        if (isset($map['CPUAdvanceCreditBalance'])) {
            $model->CPUAdvanceCreditBalance = $map['CPUAdvanceCreditBalance'];
        }
        if (isset($map['InternetBandwidth'])) {
            $model->internetBandwidth = $map['InternetBandwidth'];
        }
        if (isset($map['InternetRX'])) {
            $model->internetRX = $map['InternetRX'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['IntranetRX'])) {
            $model->intranetRX = $map['IntranetRX'];
        }
        if (isset($map['IntranetBandwidth'])) {
            $model->intranetBandwidth = $map['IntranetBandwidth'];
        }

        return $model;
    }
}
