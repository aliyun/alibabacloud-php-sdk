<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimOriginModelResponseBody\datas;
use AlibabaCloud\Tea\Model;

class GetBimOriginModelResponseBody extends Model
{
    /**
     * @var datas
     */
    public $datas;

    /**
     * @var int
     */
    public $errCode;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $traceId;
    protected $_name = [
        'datas'     => 'Datas',
        'errCode'   => 'ErrCode',
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'traceId'   => 'TraceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datas) {
            $res['Datas'] = null !== $this->datas ? $this->datas->toMap() : null;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBimOriginModelResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Datas'])) {
            $model->datas = datas::fromMap($map['Datas']);
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        return $model;
    }
}
