<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeVServerGroupsResponseBody\VServerGroups;
use AlibabaCloud\Tea\Model;

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
        'requestId'     => 'RequestId',
        'VServerGroups' => 'VServerGroups',
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
        if (null !== $this->VServerGroups) {
            $res['VServerGroups'] = null !== $this->VServerGroups ? $this->VServerGroups->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVServerGroupsResponseBody
     */
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
