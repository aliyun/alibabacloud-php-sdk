<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class LaunchAppraiseRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $acid;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'acid'       => 'Acid',
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
        if (null !== $this->acid) {
            $res['Acid'] = $this->acid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LaunchAppraiseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Acid'])) {
            $model->acid = $map['Acid'];
        }

        return $model;
    }
}
