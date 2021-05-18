<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class GetHotlineMessageLogRequest extends Model
{
    /**
     * @description 实例id
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 会话id
     *
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
     * @return GetHotlineMessageLogRequest
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
