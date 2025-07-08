<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DFS\V20180620\Models\AttachVscToMountPointsRequest\attachInfos;

class AttachVscToMountPointsRequest extends Model
{
    /**
     * @var attachInfos[]
     */
    public $attachInfos;

    /**
     * @var string
     */
    public $inputRegionId;

    /**
     * @var bool
     */
    public $useAssumeRoleChkServerPerm;
    protected $_name = [
        'attachInfos' => 'AttachInfos',
        'inputRegionId' => 'InputRegionId',
        'useAssumeRoleChkServerPerm' => 'UseAssumeRoleChkServerPerm',
    ];

    public function validate()
    {
        if (\is_array($this->attachInfos)) {
            Model::validateArray($this->attachInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachInfos) {
            if (\is_array($this->attachInfos)) {
                $res['AttachInfos'] = [];
                $n1 = 0;
                foreach ($this->attachInfos as $item1) {
                    $res['AttachInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AttachInfos'])) {
            if (!empty($map['AttachInfos'])) {
                $model->attachInfos = [];
                $n1 = 0;
                foreach ($map['AttachInfos'] as $item1) {
                    $model->attachInfos[$n1] = attachInfos::fromMap($item1);
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
