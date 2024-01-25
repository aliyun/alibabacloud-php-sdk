<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\ProductComponentRelationDetail\policy;

use AlibabaCloud\Tea\Model;

class multiCluster extends Model
{
    /**
     * @var string[]
     */
    public $targetClusters;
    protected $_name = [
        'targetClusters' => 'targetClusters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetClusters) {
            $res['targetClusters'] = $this->targetClusters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return multiCluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['targetClusters'])) {
            if (!empty($map['targetClusters'])) {
                $model->targetClusters = $map['targetClusters'];
            }
        }

        return $model;
    }
}
