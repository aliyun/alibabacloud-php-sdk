<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstanceRebootStatusResponseBody;

use AlibabaCloud\Tea\Model;

class rebootStatuses extends Model
{
    /**
     * @example 10001
     *
     * @var string
     */
    public $code;

    /**
     * @example push failed
     *
     * @var string
     */
    public $msg;

    /**
     * @example 2
     *
     * @var int
     */
    public $rebootStatus;

    /**
     * @example 9b59c2d6-0967-46e3-ad7b-152227c****
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return rebootStatuses
     */
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
