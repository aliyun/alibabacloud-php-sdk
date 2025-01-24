<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\BindConfigGroupRequest\resourceInfos;

class BindConfigGroupRequest extends Model
{
    /**
     * @var string
     */
    public $groupId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var resourceInfos[]
     */
    public $resourceInfos;
    protected $_name = [
        'groupId'       => 'GroupId',
        'regionId'      => 'RegionId',
        'resourceInfos' => 'ResourceInfos',
    ];

    public function validate()
    {
        if (\is_array($this->resourceInfos)) {
            Model::validateArray($this->resourceInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceInfos) {
            if (\is_array($this->resourceInfos)) {
                $res['ResourceInfos'] = [];
                $n1                   = 0;
                foreach ($this->resourceInfos as $item1) {
                    $res['ResourceInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceInfos'])) {
            if (!empty($map['ResourceInfos'])) {
                $model->resourceInfos = [];
                $n1                   = 0;
                foreach ($map['ResourceInfos'] as $item1) {
                    $model->resourceInfos[$n1++] = resourceInfos::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
