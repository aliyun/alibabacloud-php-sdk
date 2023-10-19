<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeGroupQpsResponseBody\groupQps;
use AlibabaCloud\Tea\Model;

class DescribeGroupQpsResponseBody extends Model
{
    /**
     * @description The number of requests directed to the API group.
     *
     * @var groupQps
     */
    public $groupQps;

    /**
     * @description The request ID.
     *
     * @example D6E46F10-F26C-4AA0-BB69-FE2743D9AE62
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groupQps'  => 'GroupQps',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupQps) {
            $res['GroupQps'] = null !== $this->groupQps ? $this->groupQps->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGroupQpsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupQps'])) {
            $model->groupQps = groupQps::fromMap($map['GroupQps']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
