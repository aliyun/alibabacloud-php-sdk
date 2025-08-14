<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallAclGroupListResponseBody\aclGroupList;

class DescribeVpcFirewallAclGroupListResponseBody extends Model
{
    /**
     * @var aclGroupList[]
     */
    public $aclGroupList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'aclGroupList' => 'AclGroupList',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->aclGroupList)) {
            Model::validateArray($this->aclGroupList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclGroupList) {
            if (\is_array($this->aclGroupList)) {
                $res['AclGroupList'] = [];
                $n1 = 0;
                foreach ($this->aclGroupList as $item1) {
                    $res['AclGroupList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['AclGroupList'])) {
            if (!empty($map['AclGroupList'])) {
                $model->aclGroupList = [];
                $n1 = 0;
                foreach ($map['AclGroupList'] as $item1) {
                    $model->aclGroupList[$n1] = aclGroupList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
