<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListSecurityGroupResponseBody\securityGroupList;
use AlibabaCloud\Tea\Model;

class ListSecurityGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var securityGroupList
     */
    public $securityGroupList;
    protected $_name = [
        'requestId'         => 'RequestId',
        'securityGroupList' => 'SecurityGroupList',
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
        if (null !== $this->securityGroupList) {
            $res['SecurityGroupList'] = null !== $this->securityGroupList ? $this->securityGroupList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSecurityGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityGroupList'])) {
            $model->securityGroupList = securityGroupList::fromMap($map['SecurityGroupList']);
        }

        return $model;
    }
}
