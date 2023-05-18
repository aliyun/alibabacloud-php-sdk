<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class GetPolicyRequest extends Model
{
    /**
     * @description The language that is used to return the description of the system policy. Valid values:
     *
     *   en: English
     *   zh-CN: Chinese
     *   ja: Japanese
     *
     * @example zh-CN
     *
     * @var string
     */
    public $language;

    /**
     * @description The name of the policy.
     *
     * The name must be 1 to 128 characters in length and can contain letters, digits, and hyphens (-).
     * @example OSS-Administrator
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The type of the policy. Valid values:
     *
     *   Custom: custom policy
     *   System: system policy
     *
     * @example Custom
     *
     * @var string
     */
    public $policyType;
    protected $_name = [
        'language'   => 'Language',
        'policyName' => 'PolicyName',
        'policyType' => 'PolicyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        return $model;
    }
}
