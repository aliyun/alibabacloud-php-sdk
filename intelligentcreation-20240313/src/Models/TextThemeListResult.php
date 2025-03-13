<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class TextThemeListResult extends Model
{
    /**
     * @example 3239281273464326823
     *
     * @var string
     */
    public $requestId;

    /**
     * @description This parameter is required.
     *
     * @var TextTheme[]
     */
    public $textThemeList;
    protected $_name = [
        'requestId'     => 'requestId',
        'textThemeList' => 'textThemeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->textThemeList) {
            $res['textThemeList'] = [];
            if (null !== $this->textThemeList && \is_array($this->textThemeList)) {
                $n = 0;
                foreach ($this->textThemeList as $item) {
                    $res['textThemeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TextThemeListResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['textThemeList'])) {
            if (!empty($map['textThemeList'])) {
                $model->textThemeList = [];
                $n                    = 0;
                foreach ($map['textThemeList'] as $item) {
                    $model->textThemeList[$n++] = null !== $item ? TextTheme::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
