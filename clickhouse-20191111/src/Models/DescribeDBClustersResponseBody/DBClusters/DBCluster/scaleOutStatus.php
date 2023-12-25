<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClustersResponseBody\DBClusters\DBCluster;

use AlibabaCloud\Tea\Model;

class scaleOutStatus extends Model
{
    /**
     * @description The progress of the data migration task in percentage.
     *
     * >  This parameter is returned only when the cluster is in the SCALING_OUT state.
     * @example 0
     *
     * @var string
     */
    public $progress;

    /**
     * @description The progress of the data migration task. This value is displayed in the following format: Data volume that has been migrated/Total data volume.
     *
     * >  This parameter is returned only when the cluster is in the SCALING_OUT state.
     * @example 0MB/60469MB
     *
     * @var string
     */
    public $ratio;
    protected $_name = [
        'progress' => 'Progress',
        'ratio'    => 'Ratio',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->ratio) {
            $res['Ratio'] = $this->ratio;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scaleOutStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Ratio'])) {
            $model->ratio = $map['Ratio'];
        }

        return $model;
    }
}
