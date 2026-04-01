<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLifecyclePolicyLogsResponseBody\lifecyclePolicyLogs;

class DescribeLifecyclePolicyLogsResponseBody extends Model
{
    /**
     * @var lifecyclePolicyLogs[]
     */
    public $lifecyclePolicyLogs;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'lifecyclePolicyLogs' => 'LifecyclePolicyLogs',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->lifecyclePolicyLogs)) {
            Model::validateArray($this->lifecyclePolicyLogs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lifecyclePolicyLogs) {
            if (\is_array($this->lifecyclePolicyLogs)) {
                $res['LifecyclePolicyLogs'] = [];
                $n1 = 0;
                foreach ($this->lifecyclePolicyLogs as $item1) {
                    $res['LifecyclePolicyLogs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['LifecyclePolicyLogs'])) {
            if (!empty($map['LifecyclePolicyLogs'])) {
                $model->lifecyclePolicyLogs = [];
                $n1 = 0;
                foreach ($map['LifecyclePolicyLogs'] as $item1) {
                    $model->lifecyclePolicyLogs[$n1] = lifecyclePolicyLogs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
