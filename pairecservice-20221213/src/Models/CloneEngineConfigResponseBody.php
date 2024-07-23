<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CloneEngineConfigResponseBody extends Model
{
    /**
     * @example 2
     *
     * @var string
     */
    public $engineConfigId;

    /**
     * @example A04CB8C0-E74A-5E83-BC61-64D153574EC7
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
     * @return CloneEngineConfigResponseBody
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
