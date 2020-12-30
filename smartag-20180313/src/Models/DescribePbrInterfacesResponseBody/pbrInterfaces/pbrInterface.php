<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribePbrInterfacesResponseBody\pbrInterfaces;

use AlibabaCloud\Tea\Model;

class pbrInterface extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $interfaceName;

    /**
     * @var string
     */
    public $healthCheckInstanceId;

    /**
     * @var int
     */
    public $priority;
    protected $_name = [
        'action'                => 'Action',
        'interfaceName'         => 'InterfaceName',
        'healthCheckInstanceId' => 'HealthCheckInstanceId',
        'priority'              => 'Priority',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->interfaceName) {
            $res['InterfaceName'] = $this->interfaceName;
        }
        if (null !== $this->healthCheckInstanceId) {
            $res['HealthCheckInstanceId'] = $this->healthCheckInstanceId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pbrInterface
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['InterfaceName'])) {
            $model->interfaceName = $map['InterfaceName'];
        }
        if (isset($map['HealthCheckInstanceId'])) {
            $model->healthCheckInstanceId = $map['HealthCheckInstanceId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        return $model;
    }
}
