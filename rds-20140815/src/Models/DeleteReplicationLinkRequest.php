<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DeleteReplicationLinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example pgm-bp1trqb4p1xd****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $promoteToMaster;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'DBInstanceId'    => 'DBInstanceId',
        'promoteToMaster' => 'PromoteToMaster',
        'resourceOwnerId' => 'ResourceOwnerId',
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
        if (null !== $this->promoteToMaster) {
            $res['PromoteToMaster'] = $this->promoteToMaster;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteReplicationLinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['PromoteToMaster'])) {
            $model->promoteToMaster = $map['PromoteToMaster'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
