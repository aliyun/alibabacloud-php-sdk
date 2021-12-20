<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class PutBucketTransferAccelerationRequest extends Model
{
    /**
     * @var TransferAccelerationConfiguration
     */
    public $transferAccelerationConfiguration;
    protected $_name = [
        'transferAccelerationConfiguration' => 'TransferAccelerationConfiguration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->transferAccelerationConfiguration) {
            $res['TransferAccelerationConfiguration'] = null !== $this->transferAccelerationConfiguration ? $this->transferAccelerationConfiguration->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutBucketTransferAccelerationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TransferAccelerationConfiguration'])) {
            $model->transferAccelerationConfiguration = TransferAccelerationConfiguration::fromMap($map['TransferAccelerationConfiguration']);
        }

        return $model;
    }
}
