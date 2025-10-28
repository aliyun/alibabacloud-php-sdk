<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;

class UpdateK8sServiceRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $externalTrafficPolicy;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $servicePorts;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'appId' => 'AppId',
        'externalTrafficPolicy' => 'ExternalTrafficPolicy',
        'name' => 'Name',
        'servicePorts' => 'ServicePorts',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->externalTrafficPolicy) {
            $res['ExternalTrafficPolicy'] = $this->externalTrafficPolicy;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->servicePorts) {
            $res['ServicePorts'] = $this->servicePorts;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['ExternalTrafficPolicy'])) {
            $model->externalTrafficPolicy = $map['ExternalTrafficPolicy'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ServicePorts'])) {
            $model->servicePorts = $map['ServicePorts'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
