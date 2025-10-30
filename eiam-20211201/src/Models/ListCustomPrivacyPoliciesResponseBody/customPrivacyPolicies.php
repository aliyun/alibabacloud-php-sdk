<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListCustomPrivacyPoliciesResponseBody;

use AlibabaCloud\Dara\Model;

class customPrivacyPolicies extends Model
{
    /**
     * @var string
     */
    public $customPrivacyPolicyId;

    /**
     * @var string
     */
    public $customPrivacyPolicyName;

    /**
     * @var string
     */
    public $defaultLanguageCode;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $userConsentType;
    protected $_name = [
        'customPrivacyPolicyId' => 'CustomPrivacyPolicyId',
        'customPrivacyPolicyName' => 'CustomPrivacyPolicyName',
        'defaultLanguageCode' => 'DefaultLanguageCode',
        'instanceId' => 'InstanceId',
        'status' => 'Status',
        'userConsentType' => 'UserConsentType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customPrivacyPolicyId) {
            $res['CustomPrivacyPolicyId'] = $this->customPrivacyPolicyId;
        }

        if (null !== $this->customPrivacyPolicyName) {
            $res['CustomPrivacyPolicyName'] = $this->customPrivacyPolicyName;
        }

        if (null !== $this->defaultLanguageCode) {
            $res['DefaultLanguageCode'] = $this->defaultLanguageCode;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userConsentType) {
            $res['UserConsentType'] = $this->userConsentType;
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
        if (isset($map['CustomPrivacyPolicyId'])) {
            $model->customPrivacyPolicyId = $map['CustomPrivacyPolicyId'];
        }

        if (isset($map['CustomPrivacyPolicyName'])) {
            $model->customPrivacyPolicyName = $map['CustomPrivacyPolicyName'];
        }

        if (isset($map['DefaultLanguageCode'])) {
            $model->defaultLanguageCode = $map['DefaultLanguageCode'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserConsentType'])) {
            $model->userConsentType = $map['UserConsentType'];
        }

        return $model;
    }
}
