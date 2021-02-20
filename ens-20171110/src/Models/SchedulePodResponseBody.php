<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class SchedulePodResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $data;
    protected $_name = [
        'requestId' => 'RequestId',
        'code'      => 'Code',
        'msg'       => 'Msg',
        'desc'      => 'Desc',
        'data'      => 'Data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SchedulePodResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        return $model;
    }
}
