<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\ChangeCloudPhoneNodeResponseBody\nodeInfos;

use AlibabaCloud\Tea\Model;

class instanceInfos extends Model
{
    /**
     * @example cpn-jewjt8xryuitu****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'instanceId' => 'InstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
