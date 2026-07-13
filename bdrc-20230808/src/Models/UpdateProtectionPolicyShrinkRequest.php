<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models;

use AlibabaCloud\Dara\Model;

class UpdateProtectionPolicyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $boundResourceCategoryIdsShrink;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $protectionPolicyName;

    /**
     * @var string
     */
    public $subProtectionPoliciesShrink;
    protected $_name = [
        'boundResourceCategoryIdsShrink' => 'BoundResourceCategoryIds',
        'clientToken' => 'ClientToken',
        'protectionPolicyName' => 'ProtectionPolicyName',
        'subProtectionPoliciesShrink' => 'SubProtectionPolicies',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->boundResourceCategoryIdsShrink) {
            $res['BoundResourceCategoryIds'] = $this->boundResourceCategoryIdsShrink;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->protectionPolicyName) {
            $res['ProtectionPolicyName'] = $this->protectionPolicyName;
        }

        if (null !== $this->subProtectionPoliciesShrink) {
            $res['SubProtectionPolicies'] = $this->subProtectionPoliciesShrink;
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
        if (isset($map['BoundResourceCategoryIds'])) {
            $model->boundResourceCategoryIdsShrink = $map['BoundResourceCategoryIds'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ProtectionPolicyName'])) {
            $model->protectionPolicyName = $map['ProtectionPolicyName'];
        }

        if (isset($map['SubProtectionPolicies'])) {
            $model->subProtectionPoliciesShrink = $map['SubProtectionPolicies'];
        }

        return $model;
    }
}
