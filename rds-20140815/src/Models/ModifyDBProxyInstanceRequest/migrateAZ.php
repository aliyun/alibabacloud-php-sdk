<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBProxyInstanceRequest;

use AlibabaCloud\Tea\Model;

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
    protected $_name = [
        'dbProxyEndpointId' => 'dbProxyEndpointId',
        'destVSwitchId'     => 'destVSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbProxyEndpointId) {
            $res['dbProxyEndpointId'] = $this->dbProxyEndpointId;
        }
        if (null !== $this->destVSwitchId) {
            $res['destVSwitchId'] = $this->destVSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return migrateAZ
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dbProxyEndpointId'])) {
            $model->dbProxyEndpointId = $map['dbProxyEndpointId'];
        }
        if (isset($map['destVSwitchId'])) {
            $model->destVSwitchId = $map['destVSwitchId'];
        }

        return $model;
    }
}
