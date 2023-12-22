<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeDasConfigResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example 593AE1C5-B70C-463F-9207-074639******
     *
     * @var string
     */
    public $requestId;

    /**
     * @example Enable
     *
     * @var string
     */
    public $storageAutoScale;

    /**
     * @example 800
     *
     * @var int
     */
    public $storageUpperBound;
    protected $_name = [
        'requestId'         => 'RequestId',
        'storageAutoScale'  => 'StorageAutoScale',
        'storageUpperBound' => 'StorageUpperBound',
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
        if (null !== $this->storageAutoScale) {
            $res['StorageAutoScale'] = $this->storageAutoScale;
        }
        if (null !== $this->storageUpperBound) {
            $res['StorageUpperBound'] = $this->storageUpperBound;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDasConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StorageAutoScale'])) {
            $model->storageAutoScale = $map['StorageAutoScale'];
        }
        if (isset($map['StorageUpperBound'])) {
            $model->storageUpperBound = $map['StorageUpperBound'];
        }

        return $model;
    }
}
