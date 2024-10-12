<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class CreateRunResponseBody extends Model
{
    /**
     * @example run-1meoz7VJd2C6f****
     *
     * @var string
     */
    public $runId;

    /**
     * @description Id of the request
     *
     * @example ADF6D849-*****-7E7030F0CE53
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'runId'     => 'RunId',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->runId) {
            $res['RunId'] = $this->runId;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRunResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RunId'])) {
            $model->runId = $map['RunId'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
