<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class SwitchNetworkResponseBody extends Model
{
    /**
     * @description Switches the network type of an ApsaraDB for Redis instance from classic network to Virtual Private Cloud (VPC).
     *
     * @example F0997EE8-F4C2-4503-9168-85177ED78C70
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Specifies whether to retain the original endpoint for the classic network after you switch the instance from classic network to VPC. Valid values:
     *
     *   **True**: retains the original endpoint.
     *   **False**: does not retain the original endpoint. This is the default value.
     *
     * >  This parameter can be used only when the network type of the instance is classic network.
     * @example 578678678
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'requestId' => 'RequestId',
        'taskId'    => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SwitchNetworkResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
