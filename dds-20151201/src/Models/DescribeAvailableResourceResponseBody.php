<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableResourceResponseBody\supportedDBTypes;
use AlibabaCloud\Tea\Model;

class DescribeAvailableResourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var supportedDBTypes
     */
    public $supportedDBTypes;
    protected $_name = [
        'requestId'        => 'RequestId',
        'supportedDBTypes' => 'SupportedDBTypes',
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
        if (null !== $this->supportedDBTypes) {
            $res['SupportedDBTypes'] = null !== $this->supportedDBTypes ? $this->supportedDBTypes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAvailableResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SupportedDBTypes'])) {
            $model->supportedDBTypes = supportedDBTypes::fromMap($map['SupportedDBTypes']);
        }

        return $model;
    }
}
