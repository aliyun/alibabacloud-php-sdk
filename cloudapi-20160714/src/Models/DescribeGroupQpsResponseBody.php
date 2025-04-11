<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeGroupQpsResponseBody\groupQps;

class DescribeGroupQpsResponseBody extends Model
{
    /**
     * @var groupQps
     */
    public $groupQps;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groupQps' => 'GroupQps',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->groupQps) {
            $this->groupQps->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupQps) {
            $res['GroupQps'] = null !== $this->groupQps ? $this->groupQps->toArray($noStream) : $this->groupQps;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
