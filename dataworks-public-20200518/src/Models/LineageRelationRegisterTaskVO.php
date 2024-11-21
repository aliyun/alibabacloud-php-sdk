<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class LineageRelationRegisterTaskVO extends Model
{
    /**
     * @var string[]
     */
    public $attributes;

    /**
     * @example 1684327487964
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @var LineageEntityVO[]
     */
    public $inputEntities;

    /**
     * @example pai-task name
     *
     * @var string
     */
    public $name;

    /**
     * @var LineageEntityVO[]
     */
    public $outputEntities;

    /**
     * @example pai_dlcjob-task.12304
     *
     * @var string
     */
    public $qualifiedName;
    protected $_name = [
        'attributes'      => 'Attributes',
        'createTimestamp' => 'CreateTimestamp',
        'inputEntities'   => 'InputEntities',
        'name'            => 'Name',
        'outputEntities'  => 'OutputEntities',
        'qualifiedName'   => 'QualifiedName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->inputEntities) {
            $res['InputEntities'] = [];
            if (null !== $this->inputEntities && \is_array($this->inputEntities)) {
                $n = 0;
                foreach ($this->inputEntities as $item) {
                    $res['InputEntities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->outputEntities) {
            $res['OutputEntities'] = [];
            if (null !== $this->outputEntities && \is_array($this->outputEntities)) {
                $n = 0;
                foreach ($this->outputEntities as $item) {
                    $res['OutputEntities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->qualifiedName) {
            $res['QualifiedName'] = $this->qualifiedName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LineageRelationRegisterTaskVO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['InputEntities'])) {
            if (!empty($map['InputEntities'])) {
                $model->inputEntities = [];
                $n                    = 0;
                foreach ($map['InputEntities'] as $item) {
                    $model->inputEntities[$n++] = null !== $item ? LineageEntityVO::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OutputEntities'])) {
            if (!empty($map['OutputEntities'])) {
                $model->outputEntities = [];
                $n                     = 0;
                foreach ($map['OutputEntities'] as $item) {
                    $model->outputEntities[$n++] = null !== $item ? LineageEntityVO::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['QualifiedName'])) {
            $model->qualifiedName = $map['QualifiedName'];
        }

        return $model;
    }
}
