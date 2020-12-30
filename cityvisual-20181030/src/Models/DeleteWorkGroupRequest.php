<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models;

use AlibabaCloud\Tea\Model;

class DeleteWorkGroupRequest extends Model
{
    /**
     * @var string
     */
    public $workGroupId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'workGroupId' => 'WorkGroupId',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->workGroupId) {
            $res['WorkGroupId'] = $this->workGroupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteWorkGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WorkGroupId'])) {
            $model->workGroupId = $map['WorkGroupId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
