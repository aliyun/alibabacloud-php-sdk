<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class CheckHadoopNetConnectionResponseBody extends Model
{
    /**
     * @description Return message: Returns error information if the connection fails, otherwise returns an empty string ("").
     *
     * @example connection timeout
     *
     * @var string
     */
    public $connectionMessage;

    /**
     * @description Connection status:
     *
     * - Network connected: Success
     *
     * - Network not connected: Failed
     *
     * @example Success
     *
     * @var string
     */
    public $connectionStatus;

    /**
     * @description Request ID.
     *
     * @example B4CAF581-2AC7-41AD-8940-D56DF7AADF5B
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'connectionMessage' => 'ConnectionMessage',
        'connectionStatus' => 'ConnectionStatus',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionMessage) {
            $res['ConnectionMessage'] = $this->connectionMessage;
        }
        if (null !== $this->connectionStatus) {
            $res['ConnectionStatus'] = $this->connectionStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckHadoopNetConnectionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionMessage'])) {
            $model->connectionMessage = $map['ConnectionMessage'];
        }
        if (isset($map['ConnectionStatus'])) {
            $model->connectionStatus = $map['ConnectionStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
