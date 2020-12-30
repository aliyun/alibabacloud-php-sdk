<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\GetJobOutputStatisticInfoResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\GetJobOutputStatisticInfoResponseBody\jobOutputList\clusterStatJobOutput;
use AlibabaCloud\Tea\Model;

class jobOutputList extends Model
{
    /**
     * @var clusterStatJobOutput[]
     */
    public $clusterStatJobOutput;
    protected $_name = [
        'clusterStatJobOutput' => 'ClusterStatJobOutput',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterStatJobOutput) {
            $res['ClusterStatJobOutput'] = [];
            if (null !== $this->clusterStatJobOutput && \is_array($this->clusterStatJobOutput)) {
                $n = 0;
                foreach ($this->clusterStatJobOutput as $item) {
                    $res['ClusterStatJobOutput'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobOutputList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterStatJobOutput'])) {
            if (!empty($map['ClusterStatJobOutput'])) {
                $model->clusterStatJobOutput = [];
                $n                           = 0;
                foreach ($map['ClusterStatJobOutput'] as $item) {
                    $model->clusterStatJobOutput[$n++] = null !== $item ? clusterStatJobOutput::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
