<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppTemplateDictsResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $dictCode;

    /**
     * @var string
     */
    public $dictLabel;

    /**
     * @var string
     */
    public $dictType;

    /**
     * @var string
     */
    public $dictValue;

    /**
     * @var bool
     */
    public $hasTemplates;

    /**
     * @var int
     */
    public $sortOrder;
    protected $_name = [
        'dictCode' => 'DictCode',
        'dictLabel' => 'DictLabel',
        'dictType' => 'DictType',
        'dictValue' => 'DictValue',
        'hasTemplates' => 'HasTemplates',
        'sortOrder' => 'SortOrder',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dictCode) {
            $res['DictCode'] = $this->dictCode;
        }

        if (null !== $this->dictLabel) {
            $res['DictLabel'] = $this->dictLabel;
        }

        if (null !== $this->dictType) {
            $res['DictType'] = $this->dictType;
        }

        if (null !== $this->dictValue) {
            $res['DictValue'] = $this->dictValue;
        }

        if (null !== $this->hasTemplates) {
            $res['HasTemplates'] = $this->hasTemplates;
        }

        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
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
        if (isset($map['DictCode'])) {
            $model->dictCode = $map['DictCode'];
        }

        if (isset($map['DictLabel'])) {
            $model->dictLabel = $map['DictLabel'];
        }

        if (isset($map['DictType'])) {
            $model->dictType = $map['DictType'];
        }

        if (isset($map['DictValue'])) {
            $model->dictValue = $map['DictValue'];
        }

        if (isset($map['HasTemplates'])) {
            $model->hasTemplates = $map['HasTemplates'];
        }

        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }

        return $model;
    }
}
