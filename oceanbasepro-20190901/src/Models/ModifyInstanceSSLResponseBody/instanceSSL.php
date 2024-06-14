<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyInstanceSSLResponseBody;

use AlibabaCloud\Tea\Model;

class instanceSSL extends Model
{
    /**
     * @description The operation to modify the SSL status. Valid values:
     *
     * - close: Disable SSL encryption.
     * @example open
     *
     * @var string
     */
    public $enableSSL;

    /**
     * @description The ID of the OceanBase cluster.
     *
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'enableSSL'  => 'EnableSSL',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableSSL) {
            $res['EnableSSL'] = $this->enableSSL;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceSSL
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableSSL'])) {
            $model->enableSSL = $map['EnableSSL'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
