<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CreateEngineConfigResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $engineConfigId;

    /**
     * @example E15A1443-7917-5BE0-AE70-25538ECF398D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'engineConfigId' => 'EngineConfigId',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateEngineConfigResponseBody
     */
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
