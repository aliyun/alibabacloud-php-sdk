<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pai\V20240521\Models;

use AlibabaCloud\Dara\Model;

class GetUserAliUidByInstanceIdRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerUid;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'regionId' => 'RegionId',
        'resourceOwnerUid' => 'ResourceOwnerUid',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceOwnerUid) {
            $res['ResourceOwnerUid'] = $this->resourceOwnerUid;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceOwnerUid'])) {
            $model->resourceOwnerUid = $map['ResourceOwnerUid'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
