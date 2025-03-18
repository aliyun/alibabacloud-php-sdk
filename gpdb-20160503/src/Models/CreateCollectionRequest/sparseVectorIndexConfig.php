<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateCollectionRequest;

use AlibabaCloud\Tea\Model;

class sparseVectorIndexConfig extends Model
{
    /**
     * @var int
     */
    public $hnswEfConstruction;

    /**
     * @var int
     */
    public $hnswM;
    protected $_name = [
        'hnswEfConstruction' => 'HnswEfConstruction',
        'hnswM' => 'HnswM',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->hnswEfConstruction) {
            $res['HnswEfConstruction'] = $this->hnswEfConstruction;
        }
        if (null !== $this->hnswM) {
            $res['HnswM'] = $this->hnswM;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sparseVectorIndexConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HnswEfConstruction'])) {
            $model->hnswEfConstruction = $map['HnswEfConstruction'];
        }
        if (isset($map['HnswM'])) {
            $model->hnswM = $map['HnswM'];
        }

        return $model;
    }
}
