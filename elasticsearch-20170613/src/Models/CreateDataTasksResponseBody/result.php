<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateDataTasksResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateDataTasksResponseBody\result\sinkCluster;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateDataTasksResponseBody\result\sourceCluster;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var sourceCluster
     */
    public $sourceCluster;

    /**
     * @var sinkCluster
     */
    public $sinkCluster;
    protected $_name = [
        'sourceCluster' => 'sourceCluster',
        'sinkCluster'   => 'sinkCluster',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceCluster) {
            $res['sourceCluster'] = null !== $this->sourceCluster ? $this->sourceCluster->toMap() : null;
        }
        if (null !== $this->sinkCluster) {
            $res['sinkCluster'] = null !== $this->sinkCluster ? $this->sinkCluster->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['sourceCluster'])) {
            $model->sourceCluster = sourceCluster::fromMap($map['sourceCluster']);
        }
        if (isset($map['sinkCluster'])) {
            $model->sinkCluster = sinkCluster::fromMap($map['sinkCluster']);
        }

        return $model;
    }
}
