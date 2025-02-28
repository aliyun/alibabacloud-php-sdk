<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBProxyInstanceRequest;

use AlibabaCloud\Dara\Model;

class migrateAZ extends Model
{
    /**
     * @var string
     */
    public $dbProxyEndpointId;
    /**
     * @var string
     */
    public $destVSwitchId;
    /**
     * @var string
     */
    public $destVpcId;
    protected $_name = [
        'dbProxyEndpointId' => 'dbProxyEndpointId',
        'destVSwitchId'     => 'destVSwitchId',
        'destVpcId'         => 'destVpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbProxyEndpointId) {
            $res['dbProxyEndpointId'] = $this->dbProxyEndpointId;
        }

        if (null !== $this->destVSwitchId) {
            $res['destVSwitchId'] = $this->destVSwitchId;
        }

        if (null !== $this->destVpcId) {
            $res['destVpcId'] = $this->destVpcId;
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
        if (isset($map['dbProxyEndpointId'])) {
            $model->dbProxyEndpointId = $map['dbProxyEndpointId'];
        }

        if (isset($map['destVSwitchId'])) {
            $model->destVSwitchId = $map['destVSwitchId'];
        }

        if (isset($map['destVpcId'])) {
            $model->destVpcId = $map['destVpcId'];
        }

        return $model;
    }
}
