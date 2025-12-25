<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetHotspotTagResponseBody\accessDeniedDetail;

class GetHotspotTagResponseBody extends Model
{
    /**
     * @var accessDeniedDetail
     */
    public $accessDeniedDetail;

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var string
     */
    public $objectString;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'data' => 'Data',
        'errMessage' => 'ErrMessage',
        'objectString' => 'ObjectString',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->accessDeniedDetail) {
            $this->accessDeniedDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = null !== $this->accessDeniedDetail ? $this->accessDeniedDetail->toArray($noStream) : $this->accessDeniedDetail;
        }

        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }

        if (null !== $this->objectString) {
            $res['ObjectString'] = $this->objectString;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = accessDeniedDetail::fromMap($map['AccessDeniedDetail']);
        }

        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }

        if (isset($map['ObjectString'])) {
            $model->objectString = $map['ObjectString'];
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
