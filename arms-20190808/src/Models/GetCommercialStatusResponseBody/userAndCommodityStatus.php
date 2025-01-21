<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetCommercialStatusResponseBody;

use AlibabaCloud\Dara\Model;

class userAndCommodityStatus extends Model
{
    /**
     * @var bool
     */
    public $basic;
    /**
     * @var string
     */
    public $chargeType;
    /**
     * @var bool
     */
    public $enable;
    /**
     * @var mixed[]
     */
    public $extraInfo;
    /**
     * @var int
     */
    public $freeDays;
    /**
     * @var string
     */
    public $lable;
    /**
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
        if (\is_array($this->extraInfo)) {
            Model::validateArray($this->extraInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->extraInfo)) {
                $res['ExtraInfo'] = [];
                foreach ($this->extraInfo as $key1 => $value1) {
                    $res['ExtraInfo'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['ExtraInfo'])) {
                $model->extraInfo = [];
                foreach ($map['ExtraInfo'] as $key1 => $value1) {
                    $model->extraInfo[$key1] = $value1;
                }
            }
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
