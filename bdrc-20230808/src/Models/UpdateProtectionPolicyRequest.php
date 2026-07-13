<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BDRC\V20230808\Models\UpdateProtectionPolicyRequest\subProtectionPolicies;

class UpdateProtectionPolicyRequest extends Model
{
    /**
     * @var string[]
     */
    public $boundResourceCategoryIds;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $protectionPolicyName;

    /**
     * @var subProtectionPolicies[]
     */
    public $subProtectionPolicies;
    protected $_name = [
        'boundResourceCategoryIds' => 'BoundResourceCategoryIds',
        'clientToken' => 'ClientToken',
        'protectionPolicyName' => 'ProtectionPolicyName',
        'subProtectionPolicies' => 'SubProtectionPolicies',
    ];

    public function validate()
    {
        if (\is_array($this->boundResourceCategoryIds)) {
            Model::validateArray($this->boundResourceCategoryIds);
        }
        if (\is_array($this->subProtectionPolicies)) {
            Model::validateArray($this->subProtectionPolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->boundResourceCategoryIds) {
            if (\is_array($this->boundResourceCategoryIds)) {
                $res['BoundResourceCategoryIds'] = [];
                $n1 = 0;
                foreach ($this->boundResourceCategoryIds as $item1) {
                    $res['BoundResourceCategoryIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->protectionPolicyName) {
            $res['ProtectionPolicyName'] = $this->protectionPolicyName;
        }

        if (null !== $this->subProtectionPolicies) {
            if (\is_array($this->subProtectionPolicies)) {
                $res['SubProtectionPolicies'] = [];
                $n1 = 0;
                foreach ($this->subProtectionPolicies as $item1) {
                    $res['SubProtectionPolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BoundResourceCategoryIds'])) {
            if (!empty($map['BoundResourceCategoryIds'])) {
                $model->boundResourceCategoryIds = [];
                $n1 = 0;
                foreach ($map['BoundResourceCategoryIds'] as $item1) {
                    $model->boundResourceCategoryIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ProtectionPolicyName'])) {
            $model->protectionPolicyName = $map['ProtectionPolicyName'];
        }

        if (isset($map['SubProtectionPolicies'])) {
            if (!empty($map['SubProtectionPolicies'])) {
                $model->subProtectionPolicies = [];
                $n1 = 0;
                foreach ($map['SubProtectionPolicies'] as $item1) {
                    $model->subProtectionPolicies[$n1] = subProtectionPolicies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
