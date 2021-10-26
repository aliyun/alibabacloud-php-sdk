<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeGroupQpsResponseBody\groupQps;
use AlibabaCloud\Tea\Model;

class DescribeGroupQpsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var groupQps
     */
    public $groupQps;
    protected $_name = [
        'requestId' => 'RequestId',
        'groupQps'  => 'GroupQps',
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
        if (null !== $this->groupQps) {
            $res['GroupQps'] = null !== $this->groupQps ? $this->groupQps->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['GroupQps'])) {
            $model->groupQps = groupQps::fromMap($map['GroupQps']);
        }

        return $model;
    }
}
