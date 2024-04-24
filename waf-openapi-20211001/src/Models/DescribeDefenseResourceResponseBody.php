<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceResponseBody\resource;
use AlibabaCloud\Tea\Model;

class DescribeDefenseResourceResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 439AADF2-368C-5E98-B14E-3086****0573
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the protected object.
     *
     * @var resource
     */
    public $resource;
    protected $_name = [
        'requestId' => 'RequestId',
        'resource'  => 'Resource',
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
        if (null !== $this->resource) {
            $res['Resource'] = null !== $this->resource ? $this->resource->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDefenseResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Resource'])) {
            $model->resource = resource::fromMap($map['Resource']);
        }

        return $model;
    }
}
