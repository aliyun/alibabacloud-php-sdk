<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Dara\Model;

class UpdateColumnRequest extends Model
{
    /**
     * @var string
     */
    public $chineseName;
    /**
     * @var string
     */
    public $columnIdKey;
    /**
     * @var string
     */
    public $description;
    /**
     * @var int
     */
    public $enumType;
    /**
     * @var string[]
     */
    public $enumValues;
    /**
     * @var int
     */
    public $rangeMax;
    /**
     * @var int
     */
    public $rangeMin;
    /**
     * @var string[]
     */
    public $samples;
    /**
     * @var string
     */
    public $tableIdKey;
    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'chineseName' => 'chineseName',
        'columnIdKey' => 'columnIdKey',
        'description' => 'description',
        'enumType'    => 'enumType',
        'enumValues'  => 'enumValues',
        'rangeMax'    => 'rangeMax',
        'rangeMin'    => 'rangeMin',
        'samples'     => 'samples',
        'tableIdKey'  => 'tableIdKey',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->enumValues)) {
            Model::validateArray($this->enumValues);
        }
        if (\is_array($this->samples)) {
            Model::validateArray($this->samples);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chineseName) {
            $res['chineseName'] = $this->chineseName;
        }

        if (null !== $this->columnIdKey) {
            $res['columnIdKey'] = $this->columnIdKey;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->enumType) {
            $res['enumType'] = $this->enumType;
        }

        if (null !== $this->enumValues) {
            if (\is_array($this->enumValues)) {
                $res['enumValues'] = [];
                $n1                = 0;
                foreach ($this->enumValues as $item1) {
                    $res['enumValues'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->rangeMax) {
            $res['rangeMax'] = $this->rangeMax;
        }

        if (null !== $this->rangeMin) {
            $res['rangeMin'] = $this->rangeMin;
        }

        if (null !== $this->samples) {
            if (\is_array($this->samples)) {
                $res['samples'] = [];
                $n1             = 0;
                foreach ($this->samples as $item1) {
                    $res['samples'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->tableIdKey) {
            $res['tableIdKey'] = $this->tableIdKey;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['chineseName'])) {
            $model->chineseName = $map['chineseName'];
        }

        if (isset($map['columnIdKey'])) {
            $model->columnIdKey = $map['columnIdKey'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['enumType'])) {
            $model->enumType = $map['enumType'];
        }

        if (isset($map['enumValues'])) {
            if (!empty($map['enumValues'])) {
                $model->enumValues = [];
                $n1                = 0;
                foreach ($map['enumValues'] as $item1) {
                    $model->enumValues[$n1++] = $item1;
                }
            }
        }

        if (isset($map['rangeMax'])) {
            $model->rangeMax = $map['rangeMax'];
        }

        if (isset($map['rangeMin'])) {
            $model->rangeMin = $map['rangeMin'];
        }

        if (isset($map['samples'])) {
            if (!empty($map['samples'])) {
                $model->samples = [];
                $n1             = 0;
                foreach ($map['samples'] as $item1) {
                    $model->samples[$n1++] = $item1;
                }
            }
        }

        if (isset($map['tableIdKey'])) {
            $model->tableIdKey = $map['tableIdKey'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
