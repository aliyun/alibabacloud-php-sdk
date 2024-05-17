<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class CheckHadoopNetConnectionResponseBody extends Model
{
    /**
     * @example xxx
     *
     * @var string
     */
    public $connectionMessage;

    /**
     * @example Success
     *
     * @var string
     */
    public $connectionStatus;

    /**
     * @example B4CAF581-2AC7-41AD-8940-D56DF7AADF5B
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'connectionMessage' => 'ConnectionMessage',
        'connectionStatus'  => 'ConnectionStatus',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

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
