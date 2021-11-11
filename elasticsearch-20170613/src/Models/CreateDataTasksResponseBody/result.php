<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateDataTasksResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateDataTasksResponseBody\result\sinkCluster;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateDataTasksResponseBody\result\sourceCluster;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var sinkCluster
     */
    public $sinkCluster;

    /**
     * @var sourceCluster
     */
    public $sourceCluster;
    protected $_name = [
        'sinkCluster'   => 'sinkCluster',
        'sourceCluster' => 'sourceCluster',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sinkCluster) {
            $res['sinkCluster'] = null !== $this->sinkCluster ? $this->sinkCluster->toMap() : null;
        }
        if (null !== $this->sourceCluster) {
            $res['sourceCluster'] = null !== $this->sourceCluster ? $this->sourceCluster->toMap() : null;
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
        if (isset($map['sinkCluster'])) {
            $model->sinkCluster = sinkCluster::fromMap($map['sinkCluster']);
        }
        if (isset($map['sourceCluster'])) {
            $model->sourceCluster = sourceCluster::fromMap($map['sourceCluster']);
        }

        return $model;
    }
}
