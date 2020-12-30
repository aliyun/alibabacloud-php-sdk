<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class DescribeDeviceAutoUpgradePolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $upgradeType;

    /**
     * @var string
     */
    public $timeZone;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $jitter;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var string
     */
    public $smartAGId;
    protected $_name = [
        'upgradeType'    => 'UpgradeType',
        'timeZone'       => 'TimeZone',
        'serialNumber'   => 'SerialNumber',
        'requestId'      => 'RequestId',
        'jitter'         => 'Jitter',
        'duration'       => 'Duration',
        'cronExpression' => 'CronExpression',
        'smartAGId'      => 'SmartAGId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->upgradeType) {
            $res['UpgradeType'] = $this->upgradeType;
        }
        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->jitter) {
            $res['Jitter'] = $this->jitter;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }
        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDeviceAutoUpgradePolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UpgradeType'])) {
            $model->upgradeType = $map['UpgradeType'];
        }
        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Jitter'])) {
            $model->jitter = $map['Jitter'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }
        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }

        return $model;
    }
}
