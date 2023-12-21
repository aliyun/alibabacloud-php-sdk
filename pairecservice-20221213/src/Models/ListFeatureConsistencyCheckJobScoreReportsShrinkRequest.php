<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class ListFeatureConsistencyCheckJobScoreReportsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $excludeRequestIdsShrink;

    /**
     * @example pairec-cn-********
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'excludeRequestIdsShrink' => 'ExcludeRequestIds',
        'instanceId'              => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->excludeRequestIdsShrink) {
            $res['ExcludeRequestIds'] = $this->excludeRequestIdsShrink;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFeatureConsistencyCheckJobScoreReportsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExcludeRequestIds'])) {
            $model->excludeRequestIdsShrink = $map['ExcludeRequestIds'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
