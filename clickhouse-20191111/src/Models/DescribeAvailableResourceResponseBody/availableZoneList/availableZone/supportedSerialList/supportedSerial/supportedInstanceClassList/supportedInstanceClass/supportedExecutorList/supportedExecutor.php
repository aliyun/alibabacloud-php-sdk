<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial\supportedInstanceClassList\supportedInstanceClass\supportedExecutorList;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial\supportedInstanceClassList\supportedInstanceClass\supportedExecutorList\supportedExecutor\nodeCount;
use AlibabaCloud\Tea\Model;

class supportedExecutor extends Model
{
    /**
     * @var nodeCount
     */
    public $nodeCount;
    protected $_name = [
        'nodeCount' => 'NodeCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = null !== $this->nodeCount ? $this->nodeCount->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedExecutor
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeCount'])) {
            $model->nodeCount = nodeCount::fromMap($map['NodeCount']);
        }

        return $model;
    }
}
