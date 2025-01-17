<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageFixTaskResponseBody\buildTasks;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageFixTaskResponseBody\pageInfo;

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
        if (\is_array($this->buildTasks)) {
            Model::validateArray($this->buildTasks);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildTasks) {
            if (\is_array($this->buildTasks)) {
                $res['BuildTasks'] = [];
                $n1                = 0;
                foreach ($this->buildTasks as $item1) {
                    $res['BuildTasks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['BuildTasks'])) {
            if (!empty($map['BuildTasks'])) {
                $model->buildTasks = [];
                $n1                = 0;
                foreach ($map['BuildTasks'] as $item1) {
                    $model->buildTasks[$n1++] = buildTasks::fromMap($item1);
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
