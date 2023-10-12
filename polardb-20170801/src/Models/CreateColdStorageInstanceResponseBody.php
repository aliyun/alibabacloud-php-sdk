<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class CreateColdStorageInstanceResponseBody extends Model
{
    /**
     * @example pcs_2zeth2gf4i83e578t
     *
     * @var string
     */
    public $coldStorageInstanceId;

    /**
     * @example F6EBB4ED-D12F-5F49-824C-9DD9C0EC4CF2
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'coldStorageInstanceId' => 'ColdStorageInstanceId',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coldStorageInstanceId) {
            $res['ColdStorageInstanceId'] = $this->coldStorageInstanceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateColdStorageInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColdStorageInstanceId'])) {
            $model->coldStorageInstanceId = $map['ColdStorageInstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
