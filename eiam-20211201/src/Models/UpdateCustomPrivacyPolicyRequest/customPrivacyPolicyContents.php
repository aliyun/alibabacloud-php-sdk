<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateCustomPrivacyPolicyRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateCustomPrivacyPolicyRequest\customPrivacyPolicyContents\customPrivacyPolicyItems;

class customPrivacyPolicyContents extends Model
{
    /**
     * @var customPrivacyPolicyItems[]
     */
    public $customPrivacyPolicyItems;

    /**
     * @var string
     */
    public $customPrivacyPolicyTip;

    /**
     * @var string
     */
    public $languageCode;
    protected $_name = [
        'customPrivacyPolicyItems' => 'CustomPrivacyPolicyItems',
        'customPrivacyPolicyTip' => 'CustomPrivacyPolicyTip',
        'languageCode' => 'LanguageCode',
    ];

    public function validate()
    {
        if (\is_array($this->customPrivacyPolicyItems)) {
            Model::validateArray($this->customPrivacyPolicyItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customPrivacyPolicyItems) {
            if (\is_array($this->customPrivacyPolicyItems)) {
                $res['CustomPrivacyPolicyItems'] = [];
                $n1 = 0;
                foreach ($this->customPrivacyPolicyItems as $item1) {
                    $res['CustomPrivacyPolicyItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->customPrivacyPolicyTip) {
            $res['CustomPrivacyPolicyTip'] = $this->customPrivacyPolicyTip;
        }

        if (null !== $this->languageCode) {
            $res['LanguageCode'] = $this->languageCode;
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
        if (isset($map['CustomPrivacyPolicyItems'])) {
            if (!empty($map['CustomPrivacyPolicyItems'])) {
                $model->customPrivacyPolicyItems = [];
                $n1 = 0;
                foreach ($map['CustomPrivacyPolicyItems'] as $item1) {
                    $model->customPrivacyPolicyItems[$n1] = customPrivacyPolicyItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CustomPrivacyPolicyTip'])) {
            $model->customPrivacyPolicyTip = $map['CustomPrivacyPolicyTip'];
        }

        if (isset($map['LanguageCode'])) {
            $model->languageCode = $map['LanguageCode'];
        }

        return $model;
    }
}
