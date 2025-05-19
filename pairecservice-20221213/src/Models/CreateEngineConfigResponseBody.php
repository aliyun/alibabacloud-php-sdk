<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class CreateEngineConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $engineConfigId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'engineConfigId' => 'EngineConfigId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->engineConfigId) {
            $res['EngineConfigId'] = $this->engineConfigId;
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
        if (isset($map['EngineConfigId'])) {
            $model->engineConfigId = $map['EngineConfigId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
