<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetCommercialStatusResponseBody;

use AlibabaCloud\Tea\Model;

class userAndCommodityStatus extends Model
{
    /**
     * @description Indicates whether you are using the Basic Edition.
     *
     * @example false
     *
     * @var bool
     */
    public $basic;

    /**
     * @description The billing method.
     *
     * @example usage
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description Indicates whether the service is activated.
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The additional information.
     *
     * @example info
     *
     * @var mixed[]
     */
    public $extraInfo;

    /**
     * @description The number of days during which the service is free of charge.
     *
     * @example 10
     *
     * @var int
     */
    public $freeDays;

    /**
     * @description The tags.
     *
     * @example NEW
     *
     * @var string
     */
    public $lable;

    /**
     * @description The commercialization status.
     *
     * Valid values:
     *
     *   Normal: The service is activated.
     *   Abnormal: An exception occurs during activation.
     *   Free: The service is not activated.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'basic'      => 'Basic',
        'chargeType' => 'ChargeType',
        'enable'     => 'Enable',
        'extraInfo'  => 'ExtraInfo',
        'freeDays'   => 'FreeDays',
        'lable'      => 'Lable',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->basic) {
            $res['Basic'] = $this->basic;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }
        if (null !== $this->freeDays) {
            $res['FreeDays'] = $this->freeDays;
        }
        if (null !== $this->lable) {
            $res['Lable'] = $this->lable;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userAndCommodityStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Basic'])) {
            $model->basic = $map['Basic'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }
        if (isset($map['FreeDays'])) {
            $model->freeDays = $map['FreeDays'];
        }
        if (isset($map['Lable'])) {
            $model->lable = $map['Lable'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
