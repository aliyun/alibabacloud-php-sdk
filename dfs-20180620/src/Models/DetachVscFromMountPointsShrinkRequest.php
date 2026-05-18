<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Dara\Model;

class DetachVscFromMountPointsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $detachInfosShrink;

    /**
     * @var string
     */
    public $inputRegionId;

    /**
     * @var bool
     */
    public $useAssumeRoleChkServerPerm;
    protected $_name = [
        'detachInfosShrink' => 'DetachInfos',
        'inputRegionId' => 'InputRegionId',
        'useAssumeRoleChkServerPerm' => 'UseAssumeRoleChkServerPerm',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detachInfosShrink) {
            $res['DetachInfos'] = $this->detachInfosShrink;
        }

        if (null !== $this->inputRegionId) {
            $res['InputRegionId'] = $this->inputRegionId;
        }

        if (null !== $this->useAssumeRoleChkServerPerm) {
            $res['UseAssumeRoleChkServerPerm'] = $this->useAssumeRoleChkServerPerm;
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
        if (isset($map['DetachInfos'])) {
            $model->detachInfosShrink = $map['DetachInfos'];
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
