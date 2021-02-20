<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class GetVmListResponseBody extends Model
{
    /**
     * @description 业务状态码
     *
     * @var int
     */
    public $code;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 返回信息
     *
     * @var string
     */
    public $msg;

    /**
     * @description 业务数据
     *
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $desc;
    protected $_name = [
        'code'      => 'Code',
        'requestId' => 'RequestId',
        'msg'       => 'Msg',
        'data'      => 'Data',
        'desc'      => 'Desc',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVmListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        return $model;
    }
}
