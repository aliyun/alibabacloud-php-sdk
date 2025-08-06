<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class UpdateNetworkAccessEndpointNameRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $networkAccessEndpointId;

    /**
     * @var string
     */
    public $networkAccessEndpointName;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'networkAccessEndpointId' => 'NetworkAccessEndpointId',
        'networkAccessEndpointName' => 'NetworkAccessEndpointName',
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

        if (null !== $this->networkAccessEndpointId) {
            $res['NetworkAccessEndpointId'] = $this->networkAccessEndpointId;
        }

        if (null !== $this->networkAccessEndpointName) {
            $res['NetworkAccessEndpointName'] = $this->networkAccessEndpointName;
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

        if (isset($map['NetworkAccessEndpointId'])) {
            $model->networkAccessEndpointId = $map['NetworkAccessEndpointId'];
        }

        if (isset($map['NetworkAccessEndpointName'])) {
            $model->networkAccessEndpointName = $map['NetworkAccessEndpointName'];
        }

        return $model;
    }
}
