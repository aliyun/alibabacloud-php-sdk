<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\BindConfigGroupRequest\resourceInfos;
use AlibabaCloud\Tea\Model;

class BindConfigGroupRequest extends Model
{
    /**
     * @description The ID of the configuration group.
     *
     * This parameter is required.
     *
     * @example ccg-0chlk9b65lj8z****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the region. Set the value to `cn-shanghai`.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resources to which you want to bind the configuration group.
     *
     * This parameter is required.
     *
     * @var resourceInfos[]
     */
    public $resourceInfos;
    protected $_name = [
        'groupId' => 'GroupId',
        'regionId' => 'RegionId',
        'resourceInfos' => 'ResourceInfos',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceInfos) {
            $res['ResourceInfos'] = [];
            if (null !== $this->resourceInfos && \is_array($this->resourceInfos)) {
                $n = 0;
                foreach ($this->resourceInfos as $item) {
                    $res['ResourceInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindConfigGroupRequest
     */
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
                $n = 0;
                foreach ($map['ResourceInfos'] as $item) {
                    $model->resourceInfos[$n++] = null !== $item ? resourceInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
