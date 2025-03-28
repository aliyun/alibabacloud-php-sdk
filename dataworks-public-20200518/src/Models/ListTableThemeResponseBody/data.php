<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableThemeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableThemeResponseBody\data\themeList;

class data extends Model
{
    /**
     * @var themeList[]
     */
    public $themeList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'themeList' => 'ThemeList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->themeList)) {
            Model::validateArray($this->themeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->themeList) {
            if (\is_array($this->themeList)) {
                $res['ThemeList'] = [];
                $n1 = 0;
                foreach ($this->themeList as $item1) {
                    $res['ThemeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['ThemeList'])) {
            if (!empty($map['ThemeList'])) {
                $model->themeList = [];
                $n1 = 0;
                foreach ($map['ThemeList'] as $item1) {
                    $model->themeList[$n1++] = themeList::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
