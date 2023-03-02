<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class QueryPublicModelEngineResponseBody extends Model
{
    /**
     * @description The unique ID of the request. You can troubleshoot errors based on the ID.
     *
     * @example 4CFB2DED-7D9B-4C42-B4AA-CFF4991DFFF4
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the data modeling engine that is returned.
     *
     * @var mixed[][]
     */
    public $returnValue;
    protected $_name = [
        'requestId'   => 'RequestId',
        'returnValue' => 'ReturnValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->returnValue) {
            $res['ReturnValue'] = $this->returnValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPublicModelEngineResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ReturnValue'])) {
            if (!empty($map['ReturnValue'])) {
                $model->returnValue = $map['ReturnValue'];
            }
        }

        return $model;
    }
}
