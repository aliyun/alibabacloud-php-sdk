<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeleteResourceGroupResponseBody\resourceGroup\regionStatuses;

use AlibabaCloud\Tea\Model;

class regionStatus extends Model
{
    /**
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @example PendingDelete
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'regionId' => 'RegionId',
        'status'   => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regionStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
