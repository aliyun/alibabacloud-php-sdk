<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models;

use AlibabaCloud\Tea\Model;

class DescribeApiMarketInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $instanceAttributes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceAttributes' => 'InstanceAttributes',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceAttributes) {
            $res['InstanceAttributes'] = $this->instanceAttributes;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiMarketInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceAttributes'])) {
            $model->instanceAttributes = $map['InstanceAttributes'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
