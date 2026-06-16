<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\CategoryAttributeMatchResponseBody\data;

use AlibabaCloud\Dara\Model;

class attributes extends Model
{
    /**
     * @var int
     */
    public $attrId;

    /**
     * @var int
     */
    public $confidence;

    /**
     * @var string
     */
    public $inputType;

    /**
     * @var bool
     */
    public $matched;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nameEn;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string[]
     */
    public $selectedValues;

    /**
     * @var int[]
     */
    public $selectedVids;
    protected $_name = [
        'attrId' => 'AttrId',
        'confidence' => 'Confidence',
        'inputType' => 'InputType',
        'matched' => 'Matched',
        'name' => 'Name',
        'nameEn' => 'NameEn',
        'reason' => 'Reason',
        'selectedValues' => 'SelectedValues',
        'selectedVids' => 'SelectedVids',
    ];

    public function validate()
    {
        if (\is_array($this->selectedValues)) {
            Model::validateArray($this->selectedValues);
        }
        if (\is_array($this->selectedVids)) {
            Model::validateArray($this->selectedVids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attrId) {
            $res['AttrId'] = $this->attrId;
        }

        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }

        if (null !== $this->inputType) {
            $res['InputType'] = $this->inputType;
        }

        if (null !== $this->matched) {
            $res['Matched'] = $this->matched;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nameEn) {
            $res['NameEn'] = $this->nameEn;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->selectedValues) {
            if (\is_array($this->selectedValues)) {
                $res['SelectedValues'] = [];
                $n1 = 0;
                foreach ($this->selectedValues as $item1) {
                    $res['SelectedValues'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->selectedVids) {
            if (\is_array($this->selectedVids)) {
                $res['SelectedVids'] = [];
                $n1 = 0;
                foreach ($this->selectedVids as $item1) {
                    $res['SelectedVids'][$n1] = $item1;
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
        if (isset($map['AttrId'])) {
            $model->attrId = $map['AttrId'];
        }

        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }

        if (isset($map['InputType'])) {
            $model->inputType = $map['InputType'];
        }

        if (isset($map['Matched'])) {
            $model->matched = $map['Matched'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NameEn'])) {
            $model->nameEn = $map['NameEn'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['SelectedValues'])) {
            if (!empty($map['SelectedValues'])) {
                $model->selectedValues = [];
                $n1 = 0;
                foreach ($map['SelectedValues'] as $item1) {
                    $model->selectedValues[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SelectedVids'])) {
            if (!empty($map['SelectedVids'])) {
                $model->selectedVids = [];
                $n1 = 0;
                foreach ($map['SelectedVids'] as $item1) {
                    $model->selectedVids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
