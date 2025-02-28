<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class ListFeatureConsistencyCheckJobScoreReportsRequest extends Model
{
    /**
     * @var string[]
     */
    public $excludeRequestIds;
    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'excludeRequestIds' => 'ExcludeRequestIds',
        'instanceId'        => 'InstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->excludeRequestIds)) {
            Model::validateArray($this->excludeRequestIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->excludeRequestIds) {
            if (\is_array($this->excludeRequestIds)) {
                $res['ExcludeRequestIds'] = [];
                $n1                       = 0;
                foreach ($this->excludeRequestIds as $item1) {
                    $res['ExcludeRequestIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['ExcludeRequestIds'])) {
            if (!empty($map['ExcludeRequestIds'])) {
                $model->excludeRequestIds = [];
                $n1                       = 0;
                foreach ($map['ExcludeRequestIds'] as $item1) {
                    $model->excludeRequestIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
