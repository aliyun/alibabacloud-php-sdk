<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CreateExperimentGroupResponseBody extends Model
{
    /**
     * @example 3
     *
     * @var string
     */
    public $experimentGroupId;

    /**
     * @description Id of the request
     *
     * @example A04CB8C0-E74A-5E83-BC61-64D153574EC7
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'experimentGroupId' => 'ExperimentGroupId',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->experimentGroupId) {
            $res['ExperimentGroupId'] = $this->experimentGroupId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateExperimentGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExperimentGroupId'])) {
            $model->experimentGroupId = $map['ExperimentGroupId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
