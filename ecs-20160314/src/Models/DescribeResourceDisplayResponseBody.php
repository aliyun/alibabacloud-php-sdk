<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay;
use AlibabaCloud\Tea\Model;

class DescribeResourceDisplayResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceDisplay
     */
    public $resourceDisplay;
    protected $_name = [
        'requestId'       => 'RequestId',
        'resourceDisplay' => 'ResourceDisplay',
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
        if (null !== $this->resourceDisplay) {
            $res['ResourceDisplay'] = null !== $this->resourceDisplay ? $this->resourceDisplay->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceDisplayResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceDisplay'])) {
            $model->resourceDisplay = resourceDisplay::fromMap($map['ResourceDisplay']);
        }

        return $model;
    }
}
