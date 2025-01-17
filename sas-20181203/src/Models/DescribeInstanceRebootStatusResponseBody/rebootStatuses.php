<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstanceRebootStatusResponseBody;

use AlibabaCloud\Dara\Model;

class rebootStatuses extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $msg;
    /**
     * @var int
     */
    public $rebootStatus;
    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'code'         => 'Code',
        'msg'          => 'Msg',
        'rebootStatus' => 'RebootStatus',
        'uuid'         => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }

        if (null !== $this->rebootStatus) {
            $res['RebootStatus'] = $this->rebootStatus;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }

        if (isset($map['RebootStatus'])) {
            $model->rebootStatus = $map['RebootStatus'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
