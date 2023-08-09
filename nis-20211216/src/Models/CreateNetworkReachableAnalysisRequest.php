<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\SDK\Nis\V20211216\Models\CreateNetworkReachableAnalysisRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateNetworkReachableAnalysisRequest extends Model
{
    /**
     * @description The ID of the network path. You can call the **CreateNetworkPath** operation to obtain the ID of the network path.
     *
     * @example np-b2f618ceb2c84057****
     *
     * @var string
     */
    public $networkPathId;

    /**
     * @description The ID of the region for which you want to create a task for analyzing network reachability.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'networkPathId' => 'NetworkPathId',
        'regionId'      => 'RegionId',
        'tag'           => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkPathId) {
            $res['NetworkPathId'] = $this->networkPathId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNetworkReachableAnalysisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkPathId'])) {
            $model->networkPathId = $map['NetworkPathId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
