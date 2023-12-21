<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CreateCrowdResponseBody extends Model
{
    /**
     * @example 3
     *
     * @var string
     */
    public $crowdId;

    /**
     * @description Id of the request
     *
     * @example 59CE7EC6-F268-5D71-9215-32922CC50D72
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'crowdId'   => 'CrowdId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->crowdId) {
            $res['CrowdId'] = $this->crowdId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCrowdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CrowdId'])) {
            $model->crowdId = $map['CrowdId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
