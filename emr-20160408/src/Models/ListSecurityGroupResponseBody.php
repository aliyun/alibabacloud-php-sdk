<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListSecurityGroupResponseBody\securityGroupList;
use AlibabaCloud\Tea\Model;

class ListSecurityGroupResponseBody extends Model
{
    /**
     * @var securityGroupList
     */
    public $securityGroupList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'securityGroupList' => 'SecurityGroupList',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroupList) {
            $res['SecurityGroupList'] = null !== $this->securityGroupList ? $this->securityGroupList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['SecurityGroupList'])) {
            $model->securityGroupList = securityGroupList::fromMap($map['SecurityGroupList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
