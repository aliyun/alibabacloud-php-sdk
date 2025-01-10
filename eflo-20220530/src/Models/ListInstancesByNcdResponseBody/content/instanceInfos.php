<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\ListInstancesByNcdResponseBody\content;

use AlibabaCloud\Tea\Model;

class instanceInfos extends Model
{
    /**
     * @description The instance ID.
     *
     * @example lni-1235****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description network communication distance
     *
     * @example 2
     *
     * @var int
     */
    public $ncd;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'ncd'        => 'Ncd',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ncd) {
            $res['Ncd'] = $this->ncd;
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
        if (isset($map['Ncd'])) {
            $model->ncd = $map['Ncd'];
        }

        return $model;
    }
}
