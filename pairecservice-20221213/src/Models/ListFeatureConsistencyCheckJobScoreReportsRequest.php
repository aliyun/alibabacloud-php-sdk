<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class ListFeatureConsistencyCheckJobScoreReportsRequest extends Model
{
    /**
     * @var string[]
     */
    public $excludeRequestIds;

    /**
     * @example pairec-cn-********
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'excludeRequestIds' => 'ExcludeRequestIds',
        'instanceId'        => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->excludeRequestIds) {
            $res['ExcludeRequestIds'] = $this->excludeRequestIds;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFeatureConsistencyCheckJobScoreReportsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExcludeRequestIds'])) {
            if (!empty($map['ExcludeRequestIds'])) {
                $model->excludeRequestIds = $map['ExcludeRequestIds'];
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
