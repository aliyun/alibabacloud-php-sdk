<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\SDK\DFS\V20180620\Models\AttachVscToMountPointsRequest\attachInfos;
use AlibabaCloud\Tea\Model;

class AttachVscToMountPointsRequest extends Model
{
    /**
     * @var attachInfos[]
     */
    public $attachInfos;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $inputRegionId;

    /**
     * @example false
     *
     * @var bool
     */
    public $useAssumeRoleChkServerPerm;
    protected $_name = [
        'attachInfos' => 'AttachInfos',
        'inputRegionId' => 'InputRegionId',
        'useAssumeRoleChkServerPerm' => 'UseAssumeRoleChkServerPerm',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachInfos) {
            $res['AttachInfos'] = [];
            if (null !== $this->attachInfos && \is_array($this->attachInfos)) {
                $n = 0;
                foreach ($this->attachInfos as $item) {
                    $res['AttachInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->inputRegionId) {
            $res['InputRegionId'] = $this->inputRegionId;
        }
        if (null !== $this->useAssumeRoleChkServerPerm) {
            $res['UseAssumeRoleChkServerPerm'] = $this->useAssumeRoleChkServerPerm;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachVscToMountPointsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachInfos'])) {
            if (!empty($map['AttachInfos'])) {
                $model->attachInfos = [];
                $n = 0;
                foreach ($map['AttachInfos'] as $item) {
                    $model->attachInfos[$n++] = null !== $item ? attachInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InputRegionId'])) {
            $model->inputRegionId = $map['InputRegionId'];
        }
        if (isset($map['UseAssumeRoleChkServerPerm'])) {
            $model->useAssumeRoleChkServerPerm = $map['UseAssumeRoleChkServerPerm'];
        }

        return $model;
    }
}
