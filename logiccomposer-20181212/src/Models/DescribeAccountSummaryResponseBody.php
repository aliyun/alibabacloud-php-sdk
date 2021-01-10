<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DescribeAccountSummaryResponseBody extends Model
{
    /**
     * @var int
     */
    public $instanceCount;

    /**
     * @var int
     */
    public $onlineInstanceCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $invocationCount;

    /**
     * @var int
     */
    public $dailyInvocationErrorCount;
    protected $_name = [
        'instanceCount'             => 'InstanceCount',
        'onlineInstanceCount'       => 'OnlineInstanceCount',
        'requestId'                 => 'RequestId',
        'invocationCount'           => 'InvocationCount',
        'dailyInvocationErrorCount' => 'DailyInvocationErrorCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->onlineInstanceCount) {
            $res['OnlineInstanceCount'] = $this->onlineInstanceCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->invocationCount) {
            $res['InvocationCount'] = $this->invocationCount;
        }
        if (null !== $this->dailyInvocationErrorCount) {
            $res['DailyInvocationErrorCount'] = $this->dailyInvocationErrorCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccountSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['OnlineInstanceCount'])) {
            $model->onlineInstanceCount = $map['OnlineInstanceCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InvocationCount'])) {
            $model->invocationCount = $map['InvocationCount'];
        }
        if (isset($map['DailyInvocationErrorCount'])) {
            $model->dailyInvocationErrorCount = $map['DailyInvocationErrorCount'];
        }

        return $model;
    }
}
