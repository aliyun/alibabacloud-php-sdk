<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\CreateVpdGrantRuleResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description Authorized resource primary key ID
     *
     * @example grant-rule-hnevjkmw
     *
     * @var string
     */
    public $grantRuleId;
    protected $_name = [
        'grantRuleId' => 'GrantRuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->grantRuleId) {
            $res['GrantRuleId'] = $this->grantRuleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GrantRuleId'])) {
            $model->grantRuleId = $map['GrantRuleId'];
        }

        return $model;
    }
}
