<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\ListAclPolicyResponseBody;

use AlibabaCloud\SDK\Eas\V20210701\Models\ListAclPolicyResponseBody\internetAclPolicyList\aclPolicyList;
use AlibabaCloud\Tea\Model;

class internetAclPolicyList extends Model
{
    /**
     * @var aclPolicyList[]
     */
    public $aclPolicyList;
    protected $_name = [
        'aclPolicyList' => 'AclPolicyList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclPolicyList) {
            $res['AclPolicyList'] = [];
            if (null !== $this->aclPolicyList && \is_array($this->aclPolicyList)) {
                $n = 0;
                foreach ($this->aclPolicyList as $item) {
                    $res['AclPolicyList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return internetAclPolicyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclPolicyList'])) {
            if (!empty($map['AclPolicyList'])) {
                $model->aclPolicyList = [];
                $n                    = 0;
                foreach ($map['AclPolicyList'] as $item) {
                    $model->aclPolicyList[$n++] = null !== $item ? aclPolicyList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
