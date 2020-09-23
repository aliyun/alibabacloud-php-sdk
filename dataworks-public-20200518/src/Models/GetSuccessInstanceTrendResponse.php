<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetSuccessInstanceTrendResponse\instanceStatusTrend;
use AlibabaCloud\Tea\Model;

class GetSuccessInstanceTrendResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceStatusTrend
     */
    public $instanceStatusTrend;
    protected $_name = [
        'requestId'           => 'RequestId',
        'instanceStatusTrend' => 'InstanceStatusTrend',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('instanceStatusTrend', $this->instanceStatusTrend, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->instanceStatusTrend) {
            $res['InstanceStatusTrend'] = null !== $this->instanceStatusTrend ? $this->instanceStatusTrend->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSuccessInstanceTrendResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceStatusTrend'])) {
            $model->instanceStatusTrend = instanceStatusTrend::fromMap($map['InstanceStatusTrend']);
        }

        return $model;
    }
}
