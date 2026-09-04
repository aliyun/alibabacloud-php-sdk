<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetCopilotTurnResponseBody\turn;

class GetCopilotTurnResponseBody extends Model
{
    /**
     * @var string
     */
    public $apiVersion;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var turn
     */
    public $turn;
    protected $_name = [
        'apiVersion' => 'ApiVersion',
        'requestId' => 'RequestId',
        'turn' => 'Turn',
    ];

    public function validate()
    {
        if (null !== $this->turn) {
            $this->turn->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiVersion) {
            $res['ApiVersion'] = $this->apiVersion;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->turn) {
            $res['Turn'] = null !== $this->turn ? $this->turn->toArray($noStream) : $this->turn;
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
        if (isset($map['ApiVersion'])) {
            $model->apiVersion = $map['ApiVersion'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Turn'])) {
            $model->turn = turn::fromMap($map['Turn']);
        }

        return $model;
    }
}
