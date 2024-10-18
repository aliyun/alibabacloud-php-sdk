<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetResourceResponseBody\resource;
use AlibabaCloud\Tea\Model;

class GetResourceResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example E871F6C0-2EFF-5790-A00D-C57543EEXXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the file resource.
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
     * @return GetResourceResponseBody
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
