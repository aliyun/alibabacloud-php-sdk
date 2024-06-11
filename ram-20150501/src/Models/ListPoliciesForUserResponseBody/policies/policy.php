<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListPoliciesForUserResponseBody\policies;

use AlibabaCloud\Tea\Model;

class policy extends Model
{
    /**
     * @description The time at which the policy is attached to the RAM user. The time is displayed in UTC.
     *
     * @example 2015-01-23T12:33:18Z
     *
     * @var string
     */
    public $attachDate;

    /**
     * @description The current version.
     *
     * @example v1
     *
     * @var string
     */
    public $defaultVersion;

    /**
     * @description The description of the policy.
     *
     * @example OSS administrator
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the policy.
     *
     * @example OSS-Administrator
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The type of the policy. Valid values:
     *
     *   System: system policy
     *   Custom: custom policy
     *
     * @example Custom
     *
     * @var string
     */
    public $policyType;
    protected $_name = [
        'attachDate'     => 'AttachDate',
        'defaultVersion' => 'DefaultVersion',
        'description'    => 'Description',
        'policyName'     => 'PolicyName',
        'policyType'     => 'PolicyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachDate) {
            $res['AttachDate'] = $this->attachDate;
        }
        if (null !== $this->defaultVersion) {
            $res['DefaultVersion'] = $this->defaultVersion;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
     * @return policy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachDate'])) {
            $model->attachDate = $map['AttachDate'];
        }
        if (isset($map['DefaultVersion'])) {
            $model->defaultVersion = $map['DefaultVersion'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
