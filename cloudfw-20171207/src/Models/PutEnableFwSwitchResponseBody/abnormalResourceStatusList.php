<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\PutEnableFwSwitchResponseBody;

use AlibabaCloud\Dara\Model;

class abnormalResourceStatusList extends Model
{
    /**
     * @var string
     */
    public $msg;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'msg' => 'Msg',
        'resource' => 'Resource',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }

        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
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
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }

        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
