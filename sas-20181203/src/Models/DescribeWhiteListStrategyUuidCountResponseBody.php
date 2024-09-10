<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeWhiteListStrategyUuidCountResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example F8B6F758-BCD4-597A-8A2C-DA5A552C****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of the servers on which the application whitelist policy takes effect.
     *
     * @example 9
     *
     * @var int
     */
    public $uuidCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'uuidCount' => 'UuidCount',
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
        if (null !== $this->uuidCount) {
            $res['UuidCount'] = $this->uuidCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWhiteListStrategyUuidCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UuidCount'])) {
            $model->uuidCount = $map['UuidCount'];
        }

        return $model;
    }
}
