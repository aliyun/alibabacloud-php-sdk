<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\GetUserOutputStatisticInfoResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\GetUserOutputStatisticInfoResponseBody\userOutputList\clusterStatUserOutput;
use AlibabaCloud\Tea\Model;

class userOutputList extends Model
{
    /**
     * @var clusterStatUserOutput[]
     */
    public $clusterStatUserOutput;
    protected $_name = [
        'clusterStatUserOutput' => 'ClusterStatUserOutput',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterStatUserOutput) {
            $res['ClusterStatUserOutput'] = [];
            if (null !== $this->clusterStatUserOutput && \is_array($this->clusterStatUserOutput)) {
                $n = 0;
                foreach ($this->clusterStatUserOutput as $item) {
                    $res['ClusterStatUserOutput'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userOutputList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterStatUserOutput'])) {
            if (!empty($map['ClusterStatUserOutput'])) {
                $model->clusterStatUserOutput = [];
                $n                            = 0;
                foreach ($map['ClusterStatUserOutput'] as $item) {
                    $model->clusterStatUserOutput[$n++] = null !== $item ? clusterStatUserOutput::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
