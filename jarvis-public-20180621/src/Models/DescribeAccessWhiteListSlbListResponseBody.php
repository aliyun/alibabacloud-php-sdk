<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Jarvispublic\V20180621\Models;

use AlibabaCloud\SDK\Jarvispublic\V20180621\Models\DescribeAccessWhiteListSlbListResponseBody\slbList;
use AlibabaCloud\Tea\Model;

class DescribeAccessWhiteListSlbListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var slbList[]
     */
    public $slbList;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $module;
    protected $_name = [
        'requestId'  => 'RequestId',
        'slbList'    => 'SlbList',
        'totalCount' => 'TotalCount',
        'module'     => 'module',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->slbList) {
            $res['SlbList'] = [];
            if (null !== $this->slbList && \is_array($this->slbList)) {
                $n = 0;
                foreach ($this->slbList as $item) {
                    $res['SlbList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->module) {
            $res['module'] = $this->module;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccessWhiteListSlbListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SlbList'])) {
            if (!empty($map['SlbList'])) {
                $model->slbList = [];
                $n              = 0;
                foreach ($map['SlbList'] as $item) {
                    $model->slbList[$n++] = null !== $item ? slbList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['module'])) {
            $model->module = $map['module'];
        }

        return $model;
    }
}
