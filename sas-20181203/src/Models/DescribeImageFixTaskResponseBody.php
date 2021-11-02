<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageFixTaskResponseBody\buildTasks;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageFixTaskResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeImageFixTaskResponseBody extends Model
{
    /**
     * @var buildTasks[]
     */
    public $buildTasks;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'buildTasks' => 'BuildTasks',
        'pageInfo'   => 'PageInfo',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildTasks) {
            $res['BuildTasks'] = [];
            if (null !== $this->buildTasks && \is_array($this->buildTasks)) {
                $n = 0;
                foreach ($this->buildTasks as $item) {
                    $res['BuildTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageFixTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuildTasks'])) {
            if (!empty($map['BuildTasks'])) {
                $model->buildTasks = [];
                $n                 = 0;
                foreach ($map['BuildTasks'] as $item) {
                    $model->buildTasks[$n++] = null !== $item ? buildTasks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
