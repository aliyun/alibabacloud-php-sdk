<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

class DescribeLogStoreExistStatusResponseBody extends Model
{
    /**
     * @var bool
     */
    public $existStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'existStatus' => 'ExistStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->existStatus) {
            $res['ExistStatus'] = $this->existStatus;
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
        if (isset($map['ExistStatus'])) {
            $model->existStatus = $map['ExistStatus'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
