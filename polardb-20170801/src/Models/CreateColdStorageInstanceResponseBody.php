<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class CreateColdStorageInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $coldStorageInstanceId;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'coldStorageInstanceId' => 'ColdStorageInstanceId',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
