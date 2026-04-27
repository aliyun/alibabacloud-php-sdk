<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudBatchGetAgentStatusResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $deviceStatus;

    /**
     * @var string
     */
    public $loginStatus;

    /**
     * @var string
     */
    public $mainUniqueId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $stateAction;
    protected $_name = [
        'deviceStatus' => 'DeviceStatus',
        'loginStatus' => 'LoginStatus',
        'mainUniqueId' => 'MainUniqueId',
        'state' => 'State',
        'stateAction' => 'StateAction',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceStatus) {
            $res['DeviceStatus'] = $this->deviceStatus;
        }

        if (null !== $this->loginStatus) {
            $res['LoginStatus'] = $this->loginStatus;
        }

        if (null !== $this->mainUniqueId) {
            $res['MainUniqueId'] = $this->mainUniqueId;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->stateAction) {
            $res['StateAction'] = $this->stateAction;
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
        if (isset($map['DeviceStatus'])) {
            $model->deviceStatus = $map['DeviceStatus'];
        }

        if (isset($map['LoginStatus'])) {
            $model->loginStatus = $map['LoginStatus'];
        }

        if (isset($map['MainUniqueId'])) {
            $model->mainUniqueId = $map['MainUniqueId'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['StateAction'])) {
            $model->stateAction = $map['StateAction'];
        }

        return $model;
    }
}
