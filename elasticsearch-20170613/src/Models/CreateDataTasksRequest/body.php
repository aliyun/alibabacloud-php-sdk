<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateDataTasksRequest;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateDataTasksRequest\body\migrateConfig;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateDataTasksRequest\body\sinkCluster;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateDataTasksRequest\body\sourceCluster;
use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @var migrateConfig
     */
    public $migrateConfig;

    /**
     * @var sinkCluster
     */
    public $sinkCluster;

    /**
     * @var sourceCluster
     */
    public $sourceCluster;
    protected $_name = [
        'migrateConfig' => 'migrateConfig',
        'sinkCluster'   => 'sinkCluster',
        'sourceCluster' => 'sourceCluster',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->migrateConfig) {
            $res['migrateConfig'] = null !== $this->migrateConfig ? $this->migrateConfig->toMap() : null;
        }
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
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['migrateConfig'])) {
            $model->migrateConfig = migrateConfig::fromMap($map['migrateConfig']);
        }
        if (isset($map['sinkCluster'])) {
            $model->sinkCluster = sinkCluster::fromMap($map['sinkCluster']);
        }
        if (isset($map['sourceCluster'])) {
            $model->sourceCluster = sourceCluster::fromMap($map['sourceCluster']);
        }

        return $model;
    }
}
