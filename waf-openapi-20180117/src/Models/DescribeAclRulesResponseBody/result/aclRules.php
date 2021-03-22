<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeAclRulesResponseBody\result;

use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeAclRulesResponseBody\result\aclRules\aclRule;
use AlibabaCloud\Tea\Model;

class aclRules extends Model
{
    /**
     * @var aclRule[]
     */
    public $aclRule;
    protected $_name = [
        'aclRule' => 'AclRule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclRule) {
            $res['AclRule'] = [];
            if (null !== $this->aclRule && \is_array($this->aclRule)) {
                $n = 0;
                foreach ($this->aclRule as $item) {
                    $res['AclRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aclRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclRule'])) {
            if (!empty($map['AclRule'])) {
                $model->aclRule = [];
                $n              = 0;
                foreach ($map['AclRule'] as $item) {
                    $model->aclRule[$n++] = null !== $item ? aclRule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
