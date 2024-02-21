<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class ReleaseClusterRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $forceRelease;

    /**
     * @example C-D7958B72E59B****
     *
     * @var string
     */
    public $id;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 12345
     *
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'forceRelease'    => 'ForceRelease',
        'id'              => 'Id',
        'regionId'        => 'RegionId',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forceRelease) {
            $res['ForceRelease'] = $this->forceRelease;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReleaseClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForceRelease'])) {
            $model->forceRelease = $map['ForceRelease'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
