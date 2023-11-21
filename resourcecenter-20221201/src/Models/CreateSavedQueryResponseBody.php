<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\Tea\Model;

class CreateSavedQueryResponseBody extends Model
{
    /**
     * @description The query ID.
     *
     * @example sq-GeAck****
     *
     * @var string
     */
    public $queryId;

    /**
     * @description The request ID.
     *
     * @example EFA806B9-7F36-55AB-8B7A-D680C2C5EE57
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'queryId'   => 'QueryId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queryId) {
            $res['QueryId'] = $this->queryId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSavedQueryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QueryId'])) {
            $model->queryId = $map['QueryId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
