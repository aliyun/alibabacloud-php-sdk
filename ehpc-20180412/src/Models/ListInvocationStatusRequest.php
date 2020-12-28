<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class ListInvocationStatusRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $commandId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'commandId' => 'CommandId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInvocationStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
        }

        return $model;
    }
}
