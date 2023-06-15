<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CheckDBNameAvailableResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * > If this operation returns only the ID of the request, the database name conforms to the naming conventions. If an error message is returned, the database name is duplicate or does not conform to the naming conventions.
     * @example 6EF82B07-28D2-48D1-B5D6-7E78FED277C7
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'requestId' => 'RequestId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckDBNameAvailableResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
