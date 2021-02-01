<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial\supportedInstanceClassList\supportedInstanceClass;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial\supportedInstanceClassList\supportedInstanceClass\supportedNodeCountList\supportedNodeCount;
use AlibabaCloud\Tea\Model;

class supportedNodeCountList extends Model
{
    /**
     * @var supportedNodeCount[]
     */
    public $supportedNodeCount;
    protected $_name = [
        'supportedNodeCount' => 'SupportedNodeCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedNodeCount) {
            $res['SupportedNodeCount'] = [];
            if (null !== $this->supportedNodeCount && \is_array($this->supportedNodeCount)) {
                $n = 0;
                foreach ($this->supportedNodeCount as $item) {
                    $res['SupportedNodeCount'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedNodeCountList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedNodeCount'])) {
            if (!empty($map['SupportedNodeCount'])) {
                $model->supportedNodeCount = [];
                $n                         = 0;
                foreach ($map['SupportedNodeCount'] as $item) {
                    $model->supportedNodeCount[$n++] = null !== $item ? supportedNodeCount::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
