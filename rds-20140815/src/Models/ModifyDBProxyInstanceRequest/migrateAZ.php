<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBProxyInstanceRequest;

use AlibabaCloud\Tea\Model;

class migrateAZ extends Model
{
    /**
     * @description The proxy connection address ID. You can obtain it through the DescribeDBProxyEndpoint interface.
     *
     * > This parameter is required when MigrateAZ is selected.
     * @example yhw429********
     *
     * @var string
     */
    public $dbProxyEndpointId;

    /**
     * @description The target VSwitchId corresponding to the proxy instance migration.
     *
     * > This parameter is required when MigrateAZ is selected.
     * @example vsw-sw0qq49d1m****
     *
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
