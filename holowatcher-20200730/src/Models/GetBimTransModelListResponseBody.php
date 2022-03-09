<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimTransModelListResponseBody\datas;
use AlibabaCloud\Tea\Model;

class GetBimTransModelListResponseBody extends Model
{
    /**
     * @var datas[]
     */
    public $datas;

    /**
     * @var int
     */
    public $errCode;

    /**
     * @var string
     */
    public $errMsg;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'datas'     => 'Datas',
        'errCode'   => 'ErrCode',
        'errMsg'    => 'ErrMsg',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datas) {
            $res['Datas'] = [];
            if (null !== $this->datas && \is_array($this->datas)) {
                $n = 0;
                foreach ($this->datas as $item) {
                    $res['Datas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMsg) {
            $res['ErrMsg'] = $this->errMsg;
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
     * @return GetBimTransModelListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Datas'])) {
            if (!empty($map['Datas'])) {
                $model->datas = [];
                $n            = 0;
                foreach ($map['Datas'] as $item) {
                    $model->datas[$n++] = null !== $item ? datas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMsg'])) {
            $model->errMsg = $map['ErrMsg'];
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
