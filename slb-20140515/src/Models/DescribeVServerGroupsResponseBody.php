<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeVServerGroupsResponseBody\VServerGroups;

class DescribeVServerGroupsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var VServerGroups
     */
    public $VServerGroups;
    protected $_name = [
        'requestId' => 'RequestId',
        'VServerGroups' => 'VServerGroups',
    ];

    public function validate()
    {
        if (null !== $this->VServerGroups) {
            $this->VServerGroups->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->VServerGroups) {
            $res['VServerGroups'] = null !== $this->VServerGroups ? $this->VServerGroups->toArray($noStream) : $this->VServerGroups;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['VServerGroups'])) {
            $model->VServerGroups = VServerGroups::fromMap($map['VServerGroups']);
        }

        return $model;
    }
}
