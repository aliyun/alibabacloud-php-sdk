<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateDocumentCollectionRequest;

use AlibabaCloud\Dara\Model;

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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
