<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallAclGroupListResponseBody\aclGroupList;
use AlibabaCloud\Tea\Model;

class DescribeVpcFirewallAclGroupListResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var aclGroupList[]
     */
    public $aclGroupList;
    protected $_name = [
        'totalCount'   => 'TotalCount',
        'requestId'    => 'RequestId',
        'aclGroupList' => 'AclGroupList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->aclGroupList) {
            $res['AclGroupList'] = [];
            if (null !== $this->aclGroupList && \is_array($this->aclGroupList)) {
                $n = 0;
                foreach ($this->aclGroupList as $item) {
                    $res['AclGroupList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpcFirewallAclGroupListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AclGroupList'])) {
            if (!empty($map['AclGroupList'])) {
                $model->aclGroupList = [];
                $n                   = 0;
                foreach ($map['AclGroupList'] as $item) {
                    $model->aclGroupList[$n++] = null !== $item ? aclGroupList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
