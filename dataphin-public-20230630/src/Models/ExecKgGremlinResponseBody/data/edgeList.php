<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ExecKgGremlinResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ExecKgGremlinResponseBody\data\edgeList\properties;

class edgeList extends Model
{
    /**
     * @var string
     */
    public $dataId;

    /**
     * @var properties[]
     */
    public $properties;

    /**
     * @var string
     */
    public $relationType;

    /**
     * @var string
     */
    public $sourceEntityDataId;

    /**
     * @var string
     */
    public $sourceEntityType;

    /**
     * @var string
     */
    public $targetEntityDataId;

    /**
     * @var string
     */
    public $targetEntityType;
    protected $_name = [
        'dataId' => 'DataId',
        'properties' => 'Properties',
        'relationType' => 'RelationType',
        'sourceEntityDataId' => 'SourceEntityDataId',
        'sourceEntityType' => 'SourceEntityType',
        'targetEntityDataId' => 'TargetEntityDataId',
        'targetEntityType' => 'TargetEntityType',
    ];

    public function validate()
    {
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }

        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['Properties'] = [];
                $n1 = 0;
                foreach ($this->properties as $item1) {
                    $res['Properties'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }

        if (null !== $this->sourceEntityDataId) {
            $res['SourceEntityDataId'] = $this->sourceEntityDataId;
        }

        if (null !== $this->sourceEntityType) {
            $res['SourceEntityType'] = $this->sourceEntityType;
        }

        if (null !== $this->targetEntityDataId) {
            $res['TargetEntityDataId'] = $this->targetEntityDataId;
        }

        if (null !== $this->targetEntityType) {
            $res['TargetEntityType'] = $this->targetEntityType;
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
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }

        if (isset($map['Properties'])) {
            if (!empty($map['Properties'])) {
                $model->properties = [];
                $n1 = 0;
                foreach ($map['Properties'] as $item1) {
                    $model->properties[$n1] = properties::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }

        if (isset($map['SourceEntityDataId'])) {
            $model->sourceEntityDataId = $map['SourceEntityDataId'];
        }

        if (isset($map['SourceEntityType'])) {
            $model->sourceEntityType = $map['SourceEntityType'];
        }

        if (isset($map['TargetEntityDataId'])) {
            $model->targetEntityDataId = $map['TargetEntityDataId'];
        }

        if (isset($map['TargetEntityType'])) {
            $model->targetEntityType = $map['TargetEntityType'];
        }

        return $model;
    }
}
