<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\UpsertCollectionDataRequest;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\UpsertCollectionDataRequest\rows\sparseVector;
use AlibabaCloud\Tea\Model;

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
     * @description This parameter is required.
     *
     * @var float[]
     */
    public $vector;
    protected $_name = [
        'id'           => 'Id',
        'metadata'     => 'Metadata',
        'sparseVector' => 'SparseVector',
        'vector'       => 'Vector',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }
        if (null !== $this->sparseVector) {
            $res['SparseVector'] = null !== $this->sparseVector ? $this->sparseVector->toMap() : null;
        }
        if (null !== $this->vector) {
            $res['Vector'] = $this->vector;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rows
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }
        if (isset($map['SparseVector'])) {
            $model->sparseVector = sparseVector::fromMap($map['SparseVector']);
        }
        if (isset($map['Vector'])) {
            if (!empty($map['Vector'])) {
                $model->vector = $map['Vector'];
            }
        }

        return $model;
    }
}
