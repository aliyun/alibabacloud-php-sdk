<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\Dara\Model;

class GetInstanceSecurityGroupsResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $securityGroups;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'instanceId' => 'InstanceId',
        'requestId' => 'RequestId',
        'securityGroups' => 'SecurityGroups',
    ];

    public function validate()
    {
        if (\is_array($this->securityGroups)) {
            Model::validateArray($this->securityGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityGroups) {
            if (\is_array($this->securityGroups)) {
                $res['SecurityGroups'] = [];
                $n1 = 0;
                foreach ($this->securityGroups as $item1) {
                    $res['SecurityGroups'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecurityGroups'])) {
            if (!empty($map['SecurityGroups'])) {
                $model->securityGroups = [];
                $n1 = 0;
                foreach ($map['SecurityGroups'] as $item1) {
                    $model->securityGroups[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
