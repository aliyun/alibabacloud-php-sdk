<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class PublishRealResponseBody extends Model
{
    /**
     * @description data
     *
     * @var string
     */
    public $data;

    /**
     * @description error
     *
     * @var string
     */
    public $error;

    /**
     * @description msgCode
     *
     * @var string
     */
    public $msgCode;

    /**
     * @description msgInfo
     *
     * @var string
     */
    public $msgInfo;

    /**
     * @description traceId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description success
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'data'      => 'Data',
        'error'     => 'Error',
        'msgCode'   => 'MsgCode',
        'msgInfo'   => 'MsgInfo',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->msgCode) {
            $res['MsgCode'] = $this->msgCode;
        }
        if (null !== $this->msgInfo) {
            $res['MsgInfo'] = $this->msgInfo;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PublishRealResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['MsgCode'])) {
            $model->msgCode = $map['MsgCode'];
        }
        if (isset($map['MsgInfo'])) {
            $model->msgInfo = $map['MsgInfo'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
