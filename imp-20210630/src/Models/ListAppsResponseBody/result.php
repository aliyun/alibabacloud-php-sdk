<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\ListAppsResponseBody;

use AlibabaCloud\SDK\Imp\V20210630\Models\ListAppsResponseBody\result\appInfoList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description App信息列表
     *
     * @var appInfoList[]
     */
    public $appInfoList;

    /**
     * @description 总页数
     *
     * @var int
     */
    public $pageTotal;

    /**
     * @description 总条目数
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'appInfoList' => 'AppInfoList',
        'pageTotal'   => 'PageTotal',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInfoList) {
            $res['AppInfoList'] = [];
            if (null !== $this->appInfoList && \is_array($this->appInfoList)) {
                $n = 0;
                foreach ($this->appInfoList as $item) {
                    $res['AppInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageTotal) {
            $res['PageTotal'] = $this->pageTotal;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInfoList'])) {
            if (!empty($map['AppInfoList'])) {
                $model->appInfoList = [];
                $n                  = 0;
                foreach ($map['AppInfoList'] as $item) {
                    $model->appInfoList[$n++] = null !== $item ? appInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageTotal'])) {
            $model->pageTotal = $map['PageTotal'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
