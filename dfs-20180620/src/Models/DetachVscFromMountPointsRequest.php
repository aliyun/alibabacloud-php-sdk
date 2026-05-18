<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DFS\V20180620\Models\DetachVscFromMountPointsRequest\detachInfos;

class DetachVscFromMountPointsRequest extends Model
{
    /**
     * @var detachInfos[]
     */
    public $detachInfos;

    /**
     * @var string
     */
    public $inputRegionId;

    /**
     * @var bool
     */
    public $useAssumeRoleChkServerPerm;
    protected $_name = [
        'detachInfos' => 'DetachInfos',
        'inputRegionId' => 'InputRegionId',
        'useAssumeRoleChkServerPerm' => 'UseAssumeRoleChkServerPerm',
    ];

    public function validate()
    {
        if (\is_array($this->detachInfos)) {
            Model::validateArray($this->detachInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detachInfos) {
            if (\is_array($this->detachInfos)) {
                $res['DetachInfos'] = [];
                $n1 = 0;
                foreach ($this->detachInfos as $item1) {
                    $res['DetachInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetachInfos'])) {
            if (!empty($map['DetachInfos'])) {
                $model->detachInfos = [];
                $n1 = 0;
                foreach ($map['DetachInfos'] as $item1) {
                    $model->detachInfos[$n1] = detachInfos::fromMap($item1);
                    ++$n1;
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
