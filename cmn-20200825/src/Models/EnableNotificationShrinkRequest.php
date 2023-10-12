<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class EnableNotificationShrinkRequest extends Model
{
    /**
     * @example cmn-cn-xxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example EnableNotification
     *
     * @var string
     */
    public $listShrink;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'listShrink' => 'List',
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
        if (null !== $this->listShrink) {
            $res['List'] = $this->listShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableNotificationShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['List'])) {
            $model->listShrink = $map['List'];
        }

        return $model;
    }
}
