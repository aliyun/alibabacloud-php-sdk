<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantArticleDetailsResponseBody\data;

use AlibabaCloud\Dara\Model;

class theme extends Model
{
    /**
     * @var string[]
     */
    public $themeImageList;

    /**
     * @var string
     */
    public $themeName;

    /**
     * @var string
     */
    public $themeTranslate;
    protected $_name = [
        'themeImageList' => 'themeImageList',
        'themeName' => 'themeName',
        'themeTranslate' => 'themeTranslate',
    ];

    public function validate()
    {
        if (\is_array($this->themeImageList)) {
            Model::validateArray($this->themeImageList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->themeImageList) {
            if (\is_array($this->themeImageList)) {
                $res['themeImageList'] = [];
                $n1 = 0;
                foreach ($this->themeImageList as $item1) {
                    $res['themeImageList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->themeName) {
            $res['themeName'] = $this->themeName;
        }

        if (null !== $this->themeTranslate) {
            $res['themeTranslate'] = $this->themeTranslate;
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
        if (isset($map['themeImageList'])) {
            if (!empty($map['themeImageList'])) {
                $model->themeImageList = [];
                $n1 = 0;
                foreach ($map['themeImageList'] as $item1) {
                    $model->themeImageList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['themeName'])) {
            $model->themeName = $map['themeName'];
        }

        if (isset($map['themeTranslate'])) {
            $model->themeTranslate = $map['themeTranslate'];
        }

        return $model;
    }
}
