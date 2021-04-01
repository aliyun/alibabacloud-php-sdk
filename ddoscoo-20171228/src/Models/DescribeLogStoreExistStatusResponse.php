<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class DescribeLogStoreExistStatusResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $existStatus;
    protected $_name = [
        'requestId'   => 'RequestId',
        'existStatus' => 'ExistStatus',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('existStatus', $this->existStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->existStatus) {
            $res['ExistStatus'] = $this->existStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLogStoreExistStatusResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ExistStatus'])) {
            $model->existStatus = $map['ExistStatus'];
        }

        return $model;
    }
}
