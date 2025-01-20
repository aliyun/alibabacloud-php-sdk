<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class UpdateChatRoutingProfileRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $routingProfiles;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'routingProfiles' => 'RoutingProfiles',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->routingProfiles) {
            $res['RoutingProfiles'] = $this->routingProfiles;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RoutingProfiles'])) {
            $model->routingProfiles = $map['RoutingProfiles'];
        }

        return $model;
    }
}
