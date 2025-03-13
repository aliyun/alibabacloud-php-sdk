<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\UnbindConfigGroupRequest\resourceInfos;
use AlibabaCloud\Tea\Model;

class UnbindConfigGroupRequest extends Model
{
    /**
     * @description The ID of the region. Set the value to `cn-shanghai`.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resources from which you want to unbind the configuration group.
     *
     * This parameter is required.
     * @var resourceInfos[]
     */
    public $resourceInfos;

    /**
     * @description The type of the configuration group.
     *
     * Valid value:
     *
     *   Timer: the scheduled task type.
     *
     * This parameter is required.
     * @example Timer
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'regionId'      => 'RegionId',
        'resourceInfos' => 'ResourceInfos',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnbindConfigGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceInfos'])) {
            if (!empty($map['ResourceInfos'])) {
                $model->resourceInfos = [];
                $n                    = 0;
                foreach ($map['ResourceInfos'] as $item) {
                    $model->resourceInfos[$n++] = null !== $item ? resourceInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
