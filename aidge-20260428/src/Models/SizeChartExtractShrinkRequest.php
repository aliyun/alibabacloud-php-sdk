<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class SizeChartExtractShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $columnNameListShrink;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $languageModel;
    protected $_name = [
        'columnNameListShrink' => 'ColumnNameList',
        'imageUrl' => 'ImageUrl',
        'languageModel' => 'LanguageModel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnNameListShrink) {
            $res['ColumnNameList'] = $this->columnNameListShrink;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->languageModel) {
            $res['LanguageModel'] = $this->languageModel;
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
        if (isset($map['ColumnNameList'])) {
            $model->columnNameListShrink = $map['ColumnNameList'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['LanguageModel'])) {
            $model->languageModel = $map['LanguageModel'];
        }

        return $model;
    }
}
