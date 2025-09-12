<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\ListAclPolicyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListAclPolicyResponseBody\internetAclPolicyList\aclPolicyList;

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
        if (\is_array($this->aclPolicyList)) {
            Model::validateArray($this->aclPolicyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclPolicyList) {
            if (\is_array($this->aclPolicyList)) {
                $res['AclPolicyList'] = [];
                $n1 = 0;
                foreach ($this->aclPolicyList as $item1) {
                    $res['AclPolicyList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AclPolicyList'])) {
            if (!empty($map['AclPolicyList'])) {
                $model->aclPolicyList = [];
                $n1 = 0;
                foreach ($map['AclPolicyList'] as $item1) {
                    $model->aclPolicyList[$n1] = aclPolicyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
