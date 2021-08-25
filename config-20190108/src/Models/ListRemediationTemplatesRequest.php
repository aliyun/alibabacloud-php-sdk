<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\Tea\Model;

class ListRemediationTemplatesRequest extends Model
{
    /**
     * @var string
     */
    public $remediationType;

    /**
     * @var string
     */
    public $managedRuleIdentifier;
    protected $_name = [
        'remediationType'       => 'RemediationType',
        'managedRuleIdentifier' => 'ManagedRuleIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remediationType) {
            $res['RemediationType'] = $this->remediationType;
        }
        if (null !== $this->managedRuleIdentifier) {
            $res['ManagedRuleIdentifier'] = $this->managedRuleIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRemediationTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RemediationType'])) {
            $model->remediationType = $map['RemediationType'];
        }
        if (isset($map['ManagedRuleIdentifier'])) {
            $model->managedRuleIdentifier = $map['ManagedRuleIdentifier'];
        }

        return $model;
    }
}
