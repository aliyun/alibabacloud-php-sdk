<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\UpdateAckClusterConnectorResponseBody\ackClusterConnector;

class UpdateAckClusterConnectorResponseBody extends Model
{
    /**
     * @var ackClusterConnector
     */
    public $ackClusterConnector;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ackClusterConnector' => 'AckClusterConnector',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->ackClusterConnector) {
            $this->ackClusterConnector->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ackClusterConnector) {
            $res['AckClusterConnector'] = null !== $this->ackClusterConnector ? $this->ackClusterConnector->toArray($noStream) : $this->ackClusterConnector;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AckClusterConnector'])) {
            $model->ackClusterConnector = ackClusterConnector::fromMap($map['AckClusterConnector']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
