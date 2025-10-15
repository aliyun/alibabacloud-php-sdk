<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetFederatedCredentialProviderResponseBody\federatedCredentialProvider;

use AlibabaCloud\Dara\Model;

class oidcProviderConfig extends Model
{
    /**
     * @var string[]
     */
    public $audiences;

    /**
     * @var string
     */
    public $dynamicJwks;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var int
     */
    public $jwksLastObtainedTime;

    /**
     * @var string
     */
    public $jwksSource;

    /**
     * @var string
     */
    public $jwksUri;

    /**
     * @var string
     */
    public $staticJwks;

    /**
     * @var string
     */
    public $trustCondition;
    protected $_name = [
        'audiences' => 'Audiences',
        'dynamicJwks' => 'DynamicJwks',
        'issuer' => 'Issuer',
        'jwksLastObtainedTime' => 'JwksLastObtainedTime',
        'jwksSource' => 'JwksSource',
        'jwksUri' => 'JwksUri',
        'staticJwks' => 'StaticJwks',
        'trustCondition' => 'TrustCondition',
    ];

    public function validate()
    {
        if (\is_array($this->audiences)) {
            Model::validateArray($this->audiences);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audiences) {
            if (\is_array($this->audiences)) {
                $res['Audiences'] = [];
                $n1 = 0;
                foreach ($this->audiences as $item1) {
                    $res['Audiences'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dynamicJwks) {
            $res['DynamicJwks'] = $this->dynamicJwks;
        }

        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }

        if (null !== $this->jwksLastObtainedTime) {
            $res['JwksLastObtainedTime'] = $this->jwksLastObtainedTime;
        }

        if (null !== $this->jwksSource) {
            $res['JwksSource'] = $this->jwksSource;
        }

        if (null !== $this->jwksUri) {
            $res['JwksUri'] = $this->jwksUri;
        }

        if (null !== $this->staticJwks) {
            $res['StaticJwks'] = $this->staticJwks;
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
        if (isset($map['Audiences'])) {
            if (!empty($map['Audiences'])) {
                $model->audiences = [];
                $n1 = 0;
                foreach ($map['Audiences'] as $item1) {
                    $model->audiences[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DynamicJwks'])) {
            $model->dynamicJwks = $map['DynamicJwks'];
        }

        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }

        if (isset($map['JwksLastObtainedTime'])) {
            $model->jwksLastObtainedTime = $map['JwksLastObtainedTime'];
        }

        if (isset($map['JwksSource'])) {
            $model->jwksSource = $map['JwksSource'];
        }

        if (isset($map['JwksUri'])) {
            $model->jwksUri = $map['JwksUri'];
        }

        if (isset($map['StaticJwks'])) {
            $model->staticJwks = $map['StaticJwks'];
        }

        if (isset($map['TrustCondition'])) {
            $model->trustCondition = $map['TrustCondition'];
        }

        return $model;
    }
}
