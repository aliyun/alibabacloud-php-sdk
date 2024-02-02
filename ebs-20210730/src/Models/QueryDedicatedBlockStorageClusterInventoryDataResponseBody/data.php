<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\QueryDedicatedBlockStorageClusterInventoryDataResponseBody;

use AlibabaCloud\SDK\Ebs\V20210730\Models\QueryDedicatedBlockStorageClusterInventoryDataResponseBody\data\monitorItems;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The returned metrics.
     *
     * @var monitorItems
     */
    public $monitorItems;

    /**
     * @description The ID list of the resource.
     *
     * @example dbsc-xxx
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The timestamp when the data is collected.
     *
     * @example 1606403800
     *
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'monitorItems' => 'MonitorItems',
        'resourceId'   => 'ResourceId',
        'timestamp'    => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->monitorItems) {
            $res['MonitorItems'] = null !== $this->monitorItems ? $this->monitorItems->toMap() : null;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MonitorItems'])) {
            $model->monitorItems = monitorItems::fromMap($map['MonitorItems']);
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
