<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class IcebergPartitionField extends Model
{
    /**
     * @var int
     */
    public $fieldId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $sourceId;

    /**
     * @var string
     */
    public $transform;
    protected $_name = [
        'fieldId' => 'fieldId',
        'name' => 'name',
        'sourceId' => 'sourceId',
        'transform' => 'transform',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldId) {
            $res['fieldId'] = $this->fieldId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }
        if (null !== $this->transform) {
            $res['transform'] = $this->transform;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IcebergPartitionField
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fieldId'])) {
            $model->fieldId = $map['fieldId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }
        if (isset($map['transform'])) {
            $model->transform = $map['transform'];
        }

        return $model;
    }
}
