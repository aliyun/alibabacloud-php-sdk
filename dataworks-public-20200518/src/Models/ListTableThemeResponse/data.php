<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableThemeResponse;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableThemeResponse\data\themeList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var themeList[]
     */
    public $themeList;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'themeList'  => 'ThemeList',
    ];

    public function validate()
    {
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('themeList', $this->themeList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->themeList) {
            $res['ThemeList'] = [];
            if (null !== $this->themeList && \is_array($this->themeList)) {
                $n = 0;
                foreach ($this->themeList as $item) {
                    $res['ThemeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['ThemeList'])) {
            if (!empty($map['ThemeList'])) {
                $model->themeList = [];
                $n                = 0;
                foreach ($map['ThemeList'] as $item) {
                    $model->themeList[$n++] = null !== $item ? themeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
