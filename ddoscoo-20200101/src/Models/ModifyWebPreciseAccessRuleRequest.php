<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyWebPreciseAccessRuleRequest extends Model
{
    /**
     * @description The domain name of the website.
     *
     * This parameter is required.
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The validity period of the rule. Unit: seconds. This parameter takes effect only when **action** of a rule is **block**. Access requests that match the rule are blocked within the specified validity period of the rule. If you do not specify this parameter, this rule takes effect all the time.
     *
     * @example 600
     *
     * @var int
     */
    public $expires;

    /**
     * @description The ID of the resource group to which the instance belongs in Resource Management. This parameter is empty by default, which indicates that the instance belongs to the default resource group.
     *
     * @example rg-acfm2pz25js****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The settings of the accurate access control rule. This parameter is a JSON string. The following list describes the fields in the value of the parameter:
     *
     *   **action**: the action that is performed if the rule is matched. This field is required and must be of the string type. Valid values:
     *
     *   **accept**: allows the requests that match the rule.
     *   **block**: blocks the requests that match the rule.
     *   **challenge**: implements a CAPTCHA for the requests that match the rule.
     *
     *   **name**: the name of the rule. This field is required and must be of the string type.
     *
     *   **condition**: the match conditions. This field is required and must be of the map type. A match condition contains the following parameters.
     *
     **
     *
     **Note**The AND logical operator is used to define the relationship among multiple match conditions.
     *
     *   **field**: the match field. This parameter is required and must be of the string type.
     *
     *   **match_method**: the logical relation. This parameter is required and must be of the string type.
     *
     **
     *
     **Note**For information about the mappings between the **field** and **match_method** parameters, see the Mappings between the field and match_method parameters table in this topic.
     *
     *   **content**: the match content. This parameter is required and must be of the string type.
     *
     *   **header_name**: the HTTP header. This parameter is optional and must be of the string type. This parameter takes effect only when **field** is **header**.
     *
     * This parameter is required.
     * @example [{"action":"block","name":"testrule","condition":[{"field":"uri","match_method":"contain","content":"/test/123"}]}]
     *
     * @var string
     */
    public $rules;
    protected $_name = [
        'domain'          => 'Domain',
        'expires'         => 'Expires',
        'resourceGroupId' => 'ResourceGroupId',
        'rules'           => 'Rules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->expires) {
            $res['Expires'] = $this->expires;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->rules) {
            $res['Rules'] = $this->rules;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyWebPreciseAccessRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Expires'])) {
            $model->expires = $map['Expires'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Rules'])) {
            $model->rules = $map['Rules'];
        }

        return $model;
    }
}
