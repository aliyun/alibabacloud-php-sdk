<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\AddClusterServiceRequest\service;
use AlibabaCloud\Tea\Model;

class AddClusterServiceRequest extends Model
{
    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var service[]
     */
    public $service;
    protected $_name = [
        'resourceOwnerId' => 'ResourceOwnerId',
        'regionId'        => 'RegionId',
        'comment'         => 'Comment',
        'clusterId'       => 'ClusterId',
        'service'         => 'Service',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->service) {
            $res['Service'] = [];
            if (null !== $this->service && \is_array($this->service)) {
                $n = 0;
                foreach ($this->service as $item) {
                    $res['Service'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddClusterServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Service'])) {
            if (!empty($map['Service'])) {
                $model->service = [];
                $n              = 0;
                foreach ($map['Service'] as $item) {
                    $model->service[$n++] = null !== $item ? service::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
