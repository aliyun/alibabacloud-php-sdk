<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\CarApplyQueryResponseBody\applyList;
use AlibabaCloud\Tea\Model;

class CarApplyQueryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var applyList[]
     */
    public $applyList;

    /**
     * @var int
     */
    public $errCode;

    /**
     * @var string
     */
    public $errMsg;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $total;

    /**
     * @var string
     */
    public $traceId;
    protected $_name = [
        'requestId' => 'RequestId',
        'applyList' => 'apply_list',
        'errCode'   => 'err_code',
        'errMsg'    => 'err_msg',
        'success'   => 'success',
        'total'     => 'total',
        'traceId'   => 'traceId',
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
        if (null !== $this->applyList) {
            $res['apply_list'] = [];
            if (null !== $this->applyList && \is_array($this->applyList)) {
                $n = 0;
                foreach ($this->applyList as $item) {
                    $res['apply_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errCode) {
            $res['err_code'] = $this->errCode;
        }
        if (null !== $this->errMsg) {
            $res['err_msg'] = $this->errMsg;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }
        if (null !== $this->traceId) {
            $res['traceId'] = $this->traceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CarApplyQueryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['apply_list'])) {
            if (!empty($map['apply_list'])) {
                $model->applyList = [];
                $n                = 0;
                foreach ($map['apply_list'] as $item) {
                    $model->applyList[$n++] = null !== $item ? applyList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['err_code'])) {
            $model->errCode = $map['err_code'];
        }
        if (isset($map['err_msg'])) {
            $model->errMsg = $map['err_msg'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }
        if (isset($map['traceId'])) {
            $model->traceId = $map['traceId'];
        }

        return $model;
    }
}
