<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class UpdateConnectorRequest extends Model
{
    /**
     * @var string
     */
    public $accelerateStatus;

    /**
     * @var string
     */
    public $connectorId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $switchStatus;

    /**
     * @var string
     */
    public $vipCidr;
    protected $_name = [
        'accelerateStatus' => 'AccelerateStatus',
        'connectorId' => 'ConnectorId',
        'name' => 'Name',
        'switchStatus' => 'SwitchStatus',
        'vipCidr' => 'VipCidr',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accelerateStatus) {
            $res['AccelerateStatus'] = $this->accelerateStatus;
        }

        if (null !== $this->connectorId) {
            $res['ConnectorId'] = $this->connectorId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->switchStatus) {
            $res['SwitchStatus'] = $this->switchStatus;
        }

        if (null !== $this->vipCidr) {
            $res['VipCidr'] = $this->vipCidr;
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
        if (isset($map['AccelerateStatus'])) {
            $model->accelerateStatus = $map['AccelerateStatus'];
        }

        if (isset($map['ConnectorId'])) {
            $model->connectorId = $map['ConnectorId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SwitchStatus'])) {
            $model->switchStatus = $map['SwitchStatus'];
        }

        if (isset($map['VipCidr'])) {
            $model->vipCidr = $map['VipCidr'];
        }

        return $model;
    }
}
