<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\DescribeAppsResponseBody;

use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\DescribeAppsResponseBody\result\appList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $totalNum;

    /**
     * @var int
     */
    public $totalPage;

    /**
     * @description App信息列表
     *
     * @var appList[]
     */
    public $appList;
    protected $_name = [
        'totalNum'  => 'TotalNum',
        'totalPage' => 'TotalPage',
        'appList'   => 'AppList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }
        if (null !== $this->appList) {
            $res['AppList'] = [];
            if (null !== $this->appList && \is_array($this->appList)) {
                $n = 0;
                foreach ($this->appList as $item) {
                    $res['AppList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }
        if (isset($map['AppList'])) {
            if (!empty($map['AppList'])) {
                $model->appList = [];
                $n              = 0;
                foreach ($map['AppList'] as $item) {
                    $model->appList[$n++] = null !== $item ? appList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
