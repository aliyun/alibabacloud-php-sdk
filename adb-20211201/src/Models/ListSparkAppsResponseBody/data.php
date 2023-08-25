<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ListSparkAppsResponseBody;

use AlibabaCloud\SDK\Adb\V20211201\Models\SparkAppInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var SparkAppInfo[]
     */
    public $appInfoList;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'appInfoList' => 'AppInfoList',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['AppInfoList'])) {
            if (!empty($map['AppInfoList'])) {
                $model->appInfoList = [];
                $n                  = 0;
                foreach ($map['AppInfoList'] as $item) {
                    $model->appInfoList[$n++] = null !== $item ? SparkAppInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
