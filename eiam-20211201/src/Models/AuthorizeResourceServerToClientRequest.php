<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class AuthorizeResourceServerToClientRequest extends Model
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
    protected $_name = [
        'clientApplicationId' => 'ClientApplicationId',
        'instanceId' => 'InstanceId',
        'resourceServerApplicationId' => 'ResourceServerApplicationId',
    ];

    public function validate()
    {
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

        return $model;
    }
}
