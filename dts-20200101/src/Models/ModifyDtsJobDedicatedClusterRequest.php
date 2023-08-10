<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyDtsJobDedicatedClusterRequest extends Model
{
    /**
     * @var string
     */
    public $dedicatedClusterId;

    /**
     * @var string
     */
    public $dtsJobIds;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'dedicatedClusterId' => 'DedicatedClusterId',
        'dtsJobIds'          => 'DtsJobIds',
        'ownerId'            => 'OwnerId',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedClusterId) {
            $res['DedicatedClusterId'] = $this->dedicatedClusterId;
        }
        if (null !== $this->dtsJobIds) {
            $res['DtsJobIds'] = $this->dtsJobIds;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDtsJobDedicatedClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedClusterId'])) {
            $model->dedicatedClusterId = $map['DedicatedClusterId'];
        }
        if (isset($map['DtsJobIds'])) {
            $model->dtsJobIds = $map['DtsJobIds'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
