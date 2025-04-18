<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\GetLifecycleResponseBody;

use AlibabaCloud\Dara\Model;

class lifecycle extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $reasonCode;

    /**
     * @var string
     */
    public $reasonMessage;

    /**
     * @var string
     */
    public $gmtCreateTime;
    protected $_name = [
        'status' => 'Status',
        'reasonCode' => 'ReasonCode',
        'reasonMessage' => 'ReasonMessage',
        'gmtCreateTime' => 'GmtCreateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
        }

        if (null !== $this->reasonMessage) {
            $res['ReasonMessage'] = $this->reasonMessage;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }

        if (isset($map['ReasonMessage'])) {
            $model->reasonMessage = $map['ReasonMessage'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        return $model;
    }
}
