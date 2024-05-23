<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class UpgradeDBInstanceMajorVersionPrecheckRequest extends Model
{
    /**
     * @description The ID of the instance. You can call the [DescribeDBInstances](https://help.aliyun.com/document_detail/610396.html) operation to query the ID of the instance.
     *
     * This parameter is required.
     * @example pgm-bp1c808s731l****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The new major engine version of the instance. The new major engine version must be later than the original major engine version.
     *
     * This parameter is required.
     * @example 12.0
     *
     * @var string
     */
    public $targetMajorVersion;
    protected $_name = [
        'DBInstanceId'       => 'DBInstanceId',
        'resourceOwnerId'    => 'ResourceOwnerId',
        'targetMajorVersion' => 'TargetMajorVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->targetMajorVersion) {
            $res['TargetMajorVersion'] = $this->targetMajorVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeDBInstanceMajorVersionPrecheckRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TargetMajorVersion'])) {
            $model->targetMajorVersion = $map['TargetMajorVersion'];
        }

        return $model;
    }
}
