<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class SizeChartExtractRequest extends Model
{
    /**
     * @var string[]
     */
    public $columnNameList;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $languageModel;
    protected $_name = [
        'columnNameList' => 'ColumnNameList',
        'imageUrl' => 'ImageUrl',
        'languageModel' => 'LanguageModel',
    ];

    public function validate()
    {
        if (\is_array($this->columnNameList)) {
            Model::validateArray($this->columnNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnNameList) {
            if (\is_array($this->columnNameList)) {
                $res['ColumnNameList'] = [];
                $n1 = 0;
                foreach ($this->columnNameList as $item1) {
                    $res['ColumnNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['ColumnNameList'])) {
                $model->columnNameList = [];
                $n1 = 0;
                foreach ($map['ColumnNameList'] as $item1) {
                    $model->columnNameList[$n1] = $item1;
                    ++$n1;
                }
            }
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
