<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleBlackListResponseBody\describeMetricRuleBlackList;

class DescribeMetricRuleBlackListResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var describeMetricRuleBlackList[]
     */
    public $describeMetricRuleBlackList;

    /**
     * @var string
     */
    public $message;

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
    public $total;
    protected $_name = [
        'code' => 'Code',
        'describeMetricRuleBlackList' => 'DescribeMetricRuleBlackList',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->describeMetricRuleBlackList)) {
            Model::validateArray($this->describeMetricRuleBlackList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->describeMetricRuleBlackList) {
            if (\is_array($this->describeMetricRuleBlackList)) {
                $res['DescribeMetricRuleBlackList'] = [];
                $n1 = 0;
                foreach ($this->describeMetricRuleBlackList as $item1) {
                    $res['DescribeMetricRuleBlackList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['DescribeMetricRuleBlackList'])) {
            if (!empty($map['DescribeMetricRuleBlackList'])) {
                $model->describeMetricRuleBlackList = [];
                $n1 = 0;
                foreach ($map['DescribeMetricRuleBlackList'] as $item1) {
                    $model->describeMetricRuleBlackList[$n1] = describeMetricRuleBlackList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
