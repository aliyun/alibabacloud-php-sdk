<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableThemeResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableThemeResponseBody\data\themeList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The list of levels of the table folders.
     *
     * @var themeList[]
     */
    public $themeList;

    /**
     * @description The total number of table folders.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'themeList'  => 'ThemeList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->themeList) {
            $res['ThemeList'] = [];
            if (null !== $this->themeList && \is_array($this->themeList)) {
                $n = 0;
                foreach ($this->themeList as $item) {
                    $res['ThemeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ThemeList'])) {
            if (!empty($map['ThemeList'])) {
                $model->themeList = [];
                $n                = 0;
                foreach ($map['ThemeList'] as $item) {
                    $model->themeList[$n++] = null !== $item ? themeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
