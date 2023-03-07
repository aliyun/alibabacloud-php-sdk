<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class ListInvocationStatusRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * You can call the [ListClusters](~~87116~~) operation to query the cluster ID.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the command.
     *
     * You can call the [ListCommands](~~87388~~) operation to query the command ID.
     * @example c-hz01v8x80o3****
     *
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
