<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Tea\Model;

class AttachVscToMountPointsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $attachInfosShrink;

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
        'attachInfosShrink' => 'AttachInfos',
        'inputRegionId' => 'InputRegionId',
        'useAssumeRoleChkServerPerm' => 'UseAssumeRoleChkServerPerm',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachInfosShrink) {
            $res['AttachInfos'] = $this->attachInfosShrink;
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
     * @return AttachVscToMountPointsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachInfos'])) {
            $model->attachInfosShrink = $map['AttachInfos'];
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
