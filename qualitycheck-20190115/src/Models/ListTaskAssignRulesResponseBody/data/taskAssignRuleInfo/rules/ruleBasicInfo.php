<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo\rules;

use AlibabaCloud\Tea\Model;

class ruleBasicInfo extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @example 2312
     *
     * @var string
     */
    public $rid;
    protected $_name = [
        'name' => 'Name',
        'rid'  => 'Rid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleBasicInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }

        return $model;
    }
}
