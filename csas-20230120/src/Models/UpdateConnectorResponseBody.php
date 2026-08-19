<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateConnectorResponseBody\connector;

class UpdateConnectorResponseBody extends Model
{
    /**
     * @var connector
     */
    public $connector;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'connector' => 'Connector',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->connector) {
            $this->connector->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connector) {
            $res['Connector'] = null !== $this->connector ? $this->connector->toArray($noStream) : $this->connector;
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
        if (isset($map['Connector'])) {
            $model->connector = connector::fromMap($map['Connector']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
