<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ModifyApplicationEndpointAddressShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var string
     */
    public $netType;

    /**
     * @var string
     */
    public $newConnectionStringPrefix;

    /**
     * @var string
     */
    public $newPortsShrink;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'endpointId' => 'EndpointId',
        'netType' => 'NetType',
        'newConnectionStringPrefix' => 'NewConnectionStringPrefix',
        'newPortsShrink' => 'NewPorts',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }

        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }

        if (null !== $this->newConnectionStringPrefix) {
            $res['NewConnectionStringPrefix'] = $this->newConnectionStringPrefix;
        }

        if (null !== $this->newPortsShrink) {
            $res['NewPorts'] = $this->newPortsShrink;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }

        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }

        if (isset($map['NewConnectionStringPrefix'])) {
            $model->newConnectionStringPrefix = $map['NewConnectionStringPrefix'];
        }

        if (isset($map['NewPorts'])) {
            $model->newPortsShrink = $map['NewPorts'];
        }

        return $model;
    }
}
