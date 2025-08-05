<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\UpsertCollectionDataRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpsertCollectionDataRequest\rows\sparseVector;

class rows extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string[]
     */
    public $metadata;

    /**
     * @var sparseVector
     */
    public $sparseVector;

    /**
     * @var float[]
     */
    public $vector;
    protected $_name = [
        'id' => 'Id',
        'metadata' => 'Metadata',
        'sparseVector' => 'SparseVector',
        'vector' => 'Vector',
    ];

    public function validate()
    {
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        if (null !== $this->sparseVector) {
            $this->sparseVector->validate();
        }
        if (\is_array($this->vector)) {
            Model::validateArray($this->vector);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['Metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['Metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->sparseVector) {
            $res['SparseVector'] = null !== $this->sparseVector ? $this->sparseVector->toArray($noStream) : $this->sparseVector;
        }

        if (null !== $this->vector) {
            if (\is_array($this->vector)) {
                $res['Vector'] = [];
                $n1 = 0;
                foreach ($this->vector as $item1) {
                    $res['Vector'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Metadata'])) {
            if (!empty($map['Metadata'])) {
                $model->metadata = [];
                foreach ($map['Metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['SparseVector'])) {
            $model->sparseVector = sparseVector::fromMap($map['SparseVector']);
        }

        if (isset($map['Vector'])) {
            if (!empty($map['Vector'])) {
                $model->vector = [];
                $n1 = 0;
                foreach ($map['Vector'] as $item1) {
                    $model->vector[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
