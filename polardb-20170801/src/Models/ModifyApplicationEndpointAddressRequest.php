<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyApplicationEndpointAddressRequest\newPorts;

class ModifyApplicationEndpointAddressRequest extends Model
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
     * @var newPorts[]
     */
    public $newPorts;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'endpointId' => 'EndpointId',
        'netType' => 'NetType',
        'newConnectionStringPrefix' => 'NewConnectionStringPrefix',
        'newPorts' => 'NewPorts',
    ];

    public function validate()
    {
        if (\is_array($this->newPorts)) {
            Model::validateArray($this->newPorts);
        }
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

        if (null !== $this->newPorts) {
            if (\is_array($this->newPorts)) {
                $res['NewPorts'] = [];
                $n1 = 0;
                foreach ($this->newPorts as $item1) {
                    $res['NewPorts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (!empty($map['NewPorts'])) {
                $model->newPorts = [];
                $n1 = 0;
                foreach ($map['NewPorts'] as $item1) {
                    $model->newPorts[$n1] = newPorts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
