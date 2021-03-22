<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeAclRulesResponseBody;

use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeAclRulesResponseBody\result\aclRules;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var aclRules
     */
    public $aclRules;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'aclRules' => 'AclRules',
        'total'    => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclRules) {
            $res['AclRules'] = null !== $this->aclRules ? $this->aclRules->toMap() : null;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclRules'])) {
            $model->aclRules = aclRules::fromMap($map['AclRules']);
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
