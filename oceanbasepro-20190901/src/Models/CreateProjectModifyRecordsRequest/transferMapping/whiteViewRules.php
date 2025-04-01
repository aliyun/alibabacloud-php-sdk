<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectModifyRecordsRequest\transferMapping;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectModifyRecordsRequest\transferMapping\whiteViewRules\objectMapping;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectModifyRecordsRequest\transferMapping\whiteViewRules\schemaMapping;

class whiteViewRules extends Model
{
    /**
     * @var objectMapping
     */
    public $objectMapping;

    /**
     * @var schemaMapping
     */
    public $schemaMapping;
    protected $_name = [
        'objectMapping' => 'ObjectMapping',
        'schemaMapping' => 'SchemaMapping',
    ];

    public function validate()
    {
        if (null !== $this->objectMapping) {
            $this->objectMapping->validate();
        }
        if (null !== $this->schemaMapping) {
            $this->schemaMapping->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->objectMapping) {
            $res['ObjectMapping'] = null !== $this->objectMapping ? $this->objectMapping->toArray($noStream) : $this->objectMapping;
        }

        if (null !== $this->schemaMapping) {
            $res['SchemaMapping'] = null !== $this->schemaMapping ? $this->schemaMapping->toArray($noStream) : $this->schemaMapping;
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
        if (isset($map['ObjectMapping'])) {
            $model->objectMapping = objectMapping::fromMap($map['ObjectMapping']);
        }

        if (isset($map['SchemaMapping'])) {
            $model->schemaMapping = schemaMapping::fromMap($map['SchemaMapping']);
        }

        return $model;
    }
}
