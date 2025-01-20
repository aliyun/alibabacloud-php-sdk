<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class TextThemeListResult extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var TextTheme[]
     */
    public $textThemeList;
    protected $_name = [
        'requestId'     => 'requestId',
        'textThemeList' => 'textThemeList',
    ];

    public function validate()
    {
        if (\is_array($this->textThemeList)) {
            Model::validateArray($this->textThemeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->textThemeList) {
            if (\is_array($this->textThemeList)) {
                $res['textThemeList'] = [];
                $n1                   = 0;
                foreach ($this->textThemeList as $item1) {
                    $res['textThemeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['textThemeList'])) {
            if (!empty($map['textThemeList'])) {
                $model->textThemeList = [];
                $n1                   = 0;
                foreach ($map['textThemeList'] as $item1) {
                    $model->textThemeList[$n1++] = TextTheme::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
