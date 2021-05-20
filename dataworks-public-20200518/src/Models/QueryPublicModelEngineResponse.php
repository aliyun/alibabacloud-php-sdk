<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class QueryPublicModelEngineResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[][]
     */
    public $returnValue;
    protected $_name = [
        'requestId'   => 'RequestId',
        'returnValue' => 'ReturnValue',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('returnValue', $this->returnValue, true);
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
     * @return QueryPublicModelEngineResponse
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
