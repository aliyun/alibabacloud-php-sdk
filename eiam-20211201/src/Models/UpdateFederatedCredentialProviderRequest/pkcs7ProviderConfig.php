<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateFederatedCredentialProviderRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateFederatedCredentialProviderRequest\pkcs7ProviderConfig\certificates;

class pkcs7ProviderConfig extends Model
{
    /**
     * @var certificates[]
     */
    public $certificates;

    /**
     * @var string
     */
    public $cmsVerificationMode;

    /**
     * @var int
     */
    public $signatureEffectiveTime;

    /**
     * @var string
     */
    public $signingTimeValueExpression;

    /**
     * @var string
     */
    public $trustAnchorSource;

    /**
     * @var string
     */
    public $trustCondition;
    protected $_name = [
        'certificates' => 'Certificates',
        'cmsVerificationMode' => 'CmsVerificationMode',
        'signatureEffectiveTime' => 'SignatureEffectiveTime',
        'signingTimeValueExpression' => 'SigningTimeValueExpression',
        'trustAnchorSource' => 'TrustAnchorSource',
        'trustCondition' => 'TrustCondition',
    ];

    public function validate()
    {
        if (\is_array($this->certificates)) {
            Model::validateArray($this->certificates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certificates) {
            if (\is_array($this->certificates)) {
                $res['Certificates'] = [];
                $n1 = 0;
                foreach ($this->certificates as $item1) {
                    $res['Certificates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cmsVerificationMode) {
            $res['CmsVerificationMode'] = $this->cmsVerificationMode;
        }

        if (null !== $this->signatureEffectiveTime) {
            $res['SignatureEffectiveTime'] = $this->signatureEffectiveTime;
        }

        if (null !== $this->signingTimeValueExpression) {
            $res['SigningTimeValueExpression'] = $this->signingTimeValueExpression;
        }

        if (null !== $this->trustAnchorSource) {
            $res['TrustAnchorSource'] = $this->trustAnchorSource;
        }

        if (null !== $this->trustCondition) {
            $res['TrustCondition'] = $this->trustCondition;
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
        if (isset($map['Certificates'])) {
            if (!empty($map['Certificates'])) {
                $model->certificates = [];
                $n1 = 0;
                foreach ($map['Certificates'] as $item1) {
                    $model->certificates[$n1] = certificates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CmsVerificationMode'])) {
            $model->cmsVerificationMode = $map['CmsVerificationMode'];
        }

        if (isset($map['SignatureEffectiveTime'])) {
            $model->signatureEffectiveTime = $map['SignatureEffectiveTime'];
        }

        if (isset($map['SigningTimeValueExpression'])) {
            $model->signingTimeValueExpression = $map['SigningTimeValueExpression'];
        }

        if (isset($map['TrustAnchorSource'])) {
            $model->trustAnchorSource = $map['TrustAnchorSource'];
        }

        if (isset($map['TrustCondition'])) {
            $model->trustCondition = $map['TrustCondition'];
        }

        return $model;
    }
}
