<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class RevokeResourceServerScopesFromClientRequest extends Model
{
    /**
     * @var string
     */
    public $clientApplicationId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $resourceServerApplicationId;

    /**
     * @var string[]
     */
    public $resourceServerScopeIds;
    protected $_name = [
        'clientApplicationId' => 'ClientApplicationId',
        'instanceId' => 'InstanceId',
        'resourceServerApplicationId' => 'ResourceServerApplicationId',
        'resourceServerScopeIds' => 'ResourceServerScopeIds',
    ];

    public function validate()
    {
        if (\is_array($this->resourceServerScopeIds)) {
            Model::validateArray($this->resourceServerScopeIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientApplicationId) {
            $res['ClientApplicationId'] = $this->clientApplicationId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->resourceServerApplicationId) {
            $res['ResourceServerApplicationId'] = $this->resourceServerApplicationId;
        }

        if (null !== $this->resourceServerScopeIds) {
            if (\is_array($this->resourceServerScopeIds)) {
                $res['ResourceServerScopeIds'] = [];
                $n1 = 0;
                foreach ($this->resourceServerScopeIds as $item1) {
                    $res['ResourceServerScopeIds'][$n1] = $item1;
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
        if (isset($map['ClientApplicationId'])) {
            $model->clientApplicationId = $map['ClientApplicationId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ResourceServerApplicationId'])) {
            $model->resourceServerApplicationId = $map['ResourceServerApplicationId'];
        }

        if (isset($map['ResourceServerScopeIds'])) {
            if (!empty($map['ResourceServerScopeIds'])) {
                $model->resourceServerScopeIds = [];
                $n1 = 0;
                foreach ($map['ResourceServerScopeIds'] as $item1) {
                    $model->resourceServerScopeIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
