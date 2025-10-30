<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetCustomPrivacyPolicyResponseBody\customPrivacyPolicy\customPrivacyPolicyContents;

use AlibabaCloud\Dara\Model;

class customPrivacyPolicyItems extends Model
{
    /**
     * @var string
     */
    public $customPrivacyPolicyItemName;

    /**
     * @var string
     */
    public $customPrivacyPolicyItemUrl;
    protected $_name = [
        'customPrivacyPolicyItemName' => 'CustomPrivacyPolicyItemName',
        'customPrivacyPolicyItemUrl' => 'CustomPrivacyPolicyItemUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customPrivacyPolicyItemName) {
            $res['CustomPrivacyPolicyItemName'] = $this->customPrivacyPolicyItemName;
        }

        if (null !== $this->customPrivacyPolicyItemUrl) {
            $res['CustomPrivacyPolicyItemUrl'] = $this->customPrivacyPolicyItemUrl;
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
        if (isset($map['CustomPrivacyPolicyItemName'])) {
            $model->customPrivacyPolicyItemName = $map['CustomPrivacyPolicyItemName'];
        }

        if (isset($map['CustomPrivacyPolicyItemUrl'])) {
            $model->customPrivacyPolicyItemUrl = $map['CustomPrivacyPolicyItemUrl'];
        }

        return $model;
    }
}
