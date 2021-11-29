<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterResourcePoolSchedulerTypeResponseBody extends Model
{
    /**
     * @var string
     */
    public $currentSchedulerType;

    /**
     * @var string
     */
    public $defaultSchedulerType;

    /**
     * @var string
     */
    public $requestId;

    /**
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
