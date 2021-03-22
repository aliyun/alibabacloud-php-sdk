<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeAclRulesResponseBody\result\aclRules\aclRule\conditions;

use AlibabaCloud\Tea\Model;

class condition extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $contain;
    protected $_name = [
        'key'     => 'Key',
        'value'   => 'Value',
        'contain' => 'Contain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->contain) {
            $res['Contain'] = $this->contain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return condition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Contain'])) {
            $model->contain = $map['Contain'];
        }

        return $model;
    }
}
