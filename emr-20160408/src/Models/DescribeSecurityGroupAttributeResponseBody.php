<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeSecurityGroupAttributeResponseBody\availableGroupList;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeSecurityGroupAttributeResponseBody\securityGroupAttributeList;
use AlibabaCloud\Tea\Model;

class DescribeSecurityGroupAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var availableGroupList
     */
    public $availableGroupList;

    /**
     * @var securityGroupAttributeList
     */
    public $securityGroupAttributeList;
    protected $_name = [
        'requestId'                  => 'RequestId',
        'availableGroupList'         => 'AvailableGroupList',
        'securityGroupAttributeList' => 'SecurityGroupAttributeList',
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
        if (null !== $this->availableGroupList) {
            $res['AvailableGroupList'] = null !== $this->availableGroupList ? $this->availableGroupList->toMap() : null;
        }
        if (null !== $this->securityGroupAttributeList) {
            $res['SecurityGroupAttributeList'] = null !== $this->securityGroupAttributeList ? $this->securityGroupAttributeList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecurityGroupAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AvailableGroupList'])) {
            $model->availableGroupList = availableGroupList::fromMap($map['AvailableGroupList']);
        }
        if (isset($map['SecurityGroupAttributeList'])) {
            $model->securityGroupAttributeList = securityGroupAttributeList::fromMap($map['SecurityGroupAttributeList']);
        }

        return $model;
    }
}
