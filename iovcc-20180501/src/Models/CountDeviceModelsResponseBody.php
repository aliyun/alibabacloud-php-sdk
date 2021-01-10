<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class CountDeviceModelsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $modelCount;
    protected $_name = [
        'requestId'  => 'RequestId',
        'modelCount' => 'ModelCount',
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
        if (null !== $this->modelCount) {
            $res['ModelCount'] = $this->modelCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CountDeviceModelsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ModelCount'])) {
            $model->modelCount = $map['ModelCount'];
        }

        return $model;
    }
}
