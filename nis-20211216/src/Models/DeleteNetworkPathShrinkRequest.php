<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Tea\Model;

class DeleteNetworkPathShrinkRequest extends Model
{
    /**
     * @description The IDs of network paths.
     *
     * This parameter is required.
     * @var string
     */
    public $networkPathIdsShrink;

    /**
     * @description The region ID of the network path that you want to delete.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'networkPathIdsShrink' => 'NetworkPathIds',
        'regionId'             => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkPathIdsShrink) {
            $res['NetworkPathIds'] = $this->networkPathIdsShrink;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteNetworkPathShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkPathIds'])) {
            $model->networkPathIdsShrink = $map['NetworkPathIds'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
