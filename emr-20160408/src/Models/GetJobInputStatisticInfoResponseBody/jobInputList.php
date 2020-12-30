<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\GetJobInputStatisticInfoResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\GetJobInputStatisticInfoResponseBody\jobInputList\clusterStatJobInput;
use AlibabaCloud\Tea\Model;

class jobInputList extends Model
{
    /**
     * @var clusterStatJobInput[]
     */
    public $clusterStatJobInput;
    protected $_name = [
        'clusterStatJobInput' => 'ClusterStatJobInput',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterStatJobInput) {
            $res['ClusterStatJobInput'] = [];
            if (null !== $this->clusterStatJobInput && \is_array($this->clusterStatJobInput)) {
                $n = 0;
                foreach ($this->clusterStatJobInput as $item) {
                    $res['ClusterStatJobInput'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobInputList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterStatJobInput'])) {
            if (!empty($map['ClusterStatJobInput'])) {
                $model->clusterStatJobInput = [];
                $n                          = 0;
                foreach ($map['ClusterStatJobInput'] as $item) {
                    $model->clusterStatJobInput[$n++] = null !== $item ? clusterStatJobInput::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
