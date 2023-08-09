<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Tea\Model;

class DeleteNetworkPathRequest extends Model
{
    /**
     * @description The IDs of network paths.
     *
     * @var string[]
     */
    public $networkPathIds;

    /**
     * @description The region ID of the network path that you want to delete.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'networkPathIds' => 'NetworkPathIds',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkPathIds) {
            $res['NetworkPathIds'] = $this->networkPathIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteNetworkPathRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkPathIds'])) {
            if (!empty($map['NetworkPathIds'])) {
                $model->networkPathIds = $map['NetworkPathIds'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
