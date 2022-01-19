<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Jarvispublic\V20180621\Models;

use AlibabaCloud\SDK\Jarvispublic\V20180621\Models\DescribeConsoleAccessWhiteListResponseBody\dataList;
use AlibabaCloud\SDK\Jarvispublic\V20180621\Models\DescribeConsoleAccessWhiteListResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeConsoleAccessWhiteListResponseBody extends Model
{
    /**
     * @var dataList[]
     */
    public $dataList;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $module;
    protected $_name = [
        'dataList'  => 'DataList',
        'pageInfo'  => 'PageInfo',
        'requestId' => 'RequestId',
        'module'    => 'module',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataList) {
            $res['DataList'] = [];
            if (null !== $this->dataList && \is_array($this->dataList)) {
                $n = 0;
                foreach ($this->dataList as $item) {
                    $res['DataList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->module) {
            $res['module'] = $this->module;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConsoleAccessWhiteListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataList'])) {
            if (!empty($map['DataList'])) {
                $model->dataList = [];
                $n               = 0;
                foreach ($map['DataList'] as $item) {
                    $model->dataList[$n++] = null !== $item ? dataList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['module'])) {
            $model->module = $map['module'];
        }

        return $model;
    }
}
