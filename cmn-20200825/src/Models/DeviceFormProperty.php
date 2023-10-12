<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class DeviceFormProperty extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var bool
     */
    public $placeholder;

    /**
     * @var bool
     */
    public $required;

    /**
     * @var bool
     */
    public $searchSupported;

    /**
     * @var int
     */
    public $sequence;

    /**
     * @var bool
     */
    public $tableVisible;

    /**
     * @var bool
     */
    public $uniqueness;

    /**
     * @var string
     */
    public $valueReference;

    /**
     * @var string
     */
    public $valueSource;

    /**
     * @var string
     */
    public $valueType;
    protected $_name = [
        'content'         => 'Content',
        'keyword'         => 'Keyword',
        'placeholder'     => 'Placeholder',
        'required'        => 'Required',
        'searchSupported' => 'SearchSupported',
        'sequence'        => 'Sequence',
        'tableVisible'    => 'TableVisible',
        'uniqueness'      => 'Uniqueness',
        'valueReference'  => 'ValueReference',
        'valueSource'     => 'ValueSource',
        'valueType'       => 'ValueType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->placeholder) {
            $res['Placeholder'] = $this->placeholder;
        }
        if (null !== $this->required) {
            $res['Required'] = $this->required;
        }
        if (null !== $this->searchSupported) {
            $res['SearchSupported'] = $this->searchSupported;
        }
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }
        if (null !== $this->tableVisible) {
            $res['TableVisible'] = $this->tableVisible;
        }
        if (null !== $this->uniqueness) {
            $res['Uniqueness'] = $this->uniqueness;
        }
        if (null !== $this->valueReference) {
            $res['ValueReference'] = $this->valueReference;
        }
        if (null !== $this->valueSource) {
            $res['ValueSource'] = $this->valueSource;
        }
        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeviceFormProperty
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['Placeholder'])) {
            $model->placeholder = $map['Placeholder'];
        }
        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }
        if (isset($map['SearchSupported'])) {
            $model->searchSupported = $map['SearchSupported'];
        }
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }
        if (isset($map['TableVisible'])) {
            $model->tableVisible = $map['TableVisible'];
        }
        if (isset($map['Uniqueness'])) {
            $model->uniqueness = $map['Uniqueness'];
        }
        if (isset($map['ValueReference'])) {
            $model->valueReference = $map['ValueReference'];
        }
        if (isset($map['ValueSource'])) {
            $model->valueSource = $map['ValueSource'];
        }
        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }

        return $model;
    }
}
