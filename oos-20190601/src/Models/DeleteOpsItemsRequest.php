<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class DeleteOpsItemsRequest extends Model
{
    /**
     * @description The IDs of O\\&M items.
     *
     * @var string[]
     */
    public $opsItemIds;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'opsItemIds' => 'OpsItemIds',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->opsItemIds) {
            $res['OpsItemIds'] = $this->opsItemIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteOpsItemsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpsItemIds'])) {
            if (!empty($map['OpsItemIds'])) {
                $model->opsItemIds = $map['OpsItemIds'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
