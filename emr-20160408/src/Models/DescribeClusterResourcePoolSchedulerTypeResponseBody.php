<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterResourcePoolSchedulerTypeResponseBody extends Model
{
    /**
     * @example FAIR_SCHEDULER
     *
     * @var string
     */
    public $currentSchedulerType;

    /**
     * @example CAPACITY_SCHEDULER
     *
     * @var string
     */
    public $defaultSchedulerType;

    /**
     * @example 7DEE7967-3F9E-44AE-8B4E-021CBCA3A26C
     *
     * @var string
     */
    public $requestId;

    /**
     * @example CAPACITY_SCHEDULER,FAIR_SCHEDULER
     *
     * @var string
     */
    public $supportSchedulerType;
    protected $_name = [
        'currentSchedulerType' => 'CurrentSchedulerType',
        'defaultSchedulerType' => 'DefaultSchedulerType',
        'requestId'            => 'RequestId',
        'supportSchedulerType' => 'SupportSchedulerType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentSchedulerType) {
            $res['CurrentSchedulerType'] = $this->currentSchedulerType;
        }
        if (null !== $this->defaultSchedulerType) {
            $res['DefaultSchedulerType'] = $this->defaultSchedulerType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->supportSchedulerType) {
            $res['SupportSchedulerType'] = $this->supportSchedulerType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterResourcePoolSchedulerTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentSchedulerType'])) {
            $model->currentSchedulerType = $map['CurrentSchedulerType'];
        }
        if (isset($map['DefaultSchedulerType'])) {
            $model->defaultSchedulerType = $map['DefaultSchedulerType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SupportSchedulerType'])) {
            $model->supportSchedulerType = $map['SupportSchedulerType'];
        }

        return $model;
    }
}
