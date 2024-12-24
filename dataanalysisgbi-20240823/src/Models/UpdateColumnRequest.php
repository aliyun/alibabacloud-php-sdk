<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models;

use AlibabaCloud\Tea\Model;

class UpdateColumnRequest extends Model
{
    /**
     * @var string
     */
    public $chineseName;

    /**
     * @description This parameter is required.
     *
     * @example column-AAAAAAAAh6cWOUPagYstkg
     *
     * @var string
     */
    public $columnIdKey;

    /**
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $enumType;

    /**
     * @var string[]
     */
    public $enumValues;

    /**
     * @example 2000
     *
     * @var int
     */
    public $rangeMax;

    /**
     * @example 0
     *
     * @var int
     */
    public $rangeMin;

    /**
     * @var string[]
     */
    public $samples;

    /**
     * @description This parameter is required.
     *
     * @example table-AAAAAAAAFQBwSLJkUj4CYg
     *
     * @var string
     */
    public $tableIdKey;

    /**
     * @description This parameter is required.
     *
     * @example llm-2v3934xtp49esw64
     *
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
    }

    public function toMap()
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
            $res['enumValues'] = $this->enumValues;
        }
        if (null !== $this->rangeMax) {
            $res['rangeMax'] = $this->rangeMax;
        }
        if (null !== $this->rangeMin) {
            $res['rangeMin'] = $this->rangeMin;
        }
        if (null !== $this->samples) {
            $res['samples'] = $this->samples;
        }
        if (null !== $this->tableIdKey) {
            $res['tableIdKey'] = $this->tableIdKey;
        }
        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateColumnRequest
     */
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
                $model->enumValues = $map['enumValues'];
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
                $model->samples = $map['samples'];
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
