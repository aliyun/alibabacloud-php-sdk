<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationSsoConfigRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationSsoConfigRequest\samlSsoConfig\attributeStatements;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationSsoConfigRequest\samlSsoConfig\optionalRelayStates;

class samlSsoConfig extends Model
{
    /**
     * @var bool
     */
    public $assertionSigned;

    /**
     * @var attributeStatements[]
     */
    public $attributeStatements;

    /**
     * @var string
     */
    public $defaultRelayState;

    /**
     * @var string
     */
    public $idPEntityId;

    /**
     * @var string
     */
    public $nameIdFormat;

    /**
     * @var string
     */
    public $nameIdValueExpression;

    /**
     * @var optionalRelayStates[]
     */
    public $optionalRelayStates;

    /**
     * @var bool
     */
    public $requireAuthnRequestSigned;

    /**
     * @var bool
     */
    public $responseSigned;

    /**
     * @var string
     */
    public $signatureAlgorithm;

    /**
     * @var string
     */
    public $spEntityId;

    /**
     * @var string[]
     */
    public $spSigningCertificates;

    /**
     * @var string
     */
    public $spSloResponseUrl;

    /**
     * @var string
     */
    public $spSsoAcsUrl;
    protected $_name = [
        'assertionSigned' => 'AssertionSigned',
        'attributeStatements' => 'AttributeStatements',
        'defaultRelayState' => 'DefaultRelayState',
        'idPEntityId' => 'IdPEntityId',
        'nameIdFormat' => 'NameIdFormat',
        'nameIdValueExpression' => 'NameIdValueExpression',
        'optionalRelayStates' => 'OptionalRelayStates',
        'requireAuthnRequestSigned' => 'RequireAuthnRequestSigned',
        'responseSigned' => 'ResponseSigned',
        'signatureAlgorithm' => 'SignatureAlgorithm',
        'spEntityId' => 'SpEntityId',
        'spSigningCertificates' => 'SpSigningCertificates',
        'spSloResponseUrl' => 'SpSloResponseUrl',
        'spSsoAcsUrl' => 'SpSsoAcsUrl',
    ];

    public function validate()
    {
        if (\is_array($this->attributeStatements)) {
            Model::validateArray($this->attributeStatements);
        }
        if (\is_array($this->optionalRelayStates)) {
            Model::validateArray($this->optionalRelayStates);
        }
        if (\is_array($this->spSigningCertificates)) {
            Model::validateArray($this->spSigningCertificates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assertionSigned) {
            $res['AssertionSigned'] = $this->assertionSigned;
        }

        if (null !== $this->attributeStatements) {
            if (\is_array($this->attributeStatements)) {
                $res['AttributeStatements'] = [];
                $n1 = 0;
                foreach ($this->attributeStatements as $item1) {
                    $res['AttributeStatements'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->defaultRelayState) {
            $res['DefaultRelayState'] = $this->defaultRelayState;
        }

        if (null !== $this->idPEntityId) {
            $res['IdPEntityId'] = $this->idPEntityId;
        }

        if (null !== $this->nameIdFormat) {
            $res['NameIdFormat'] = $this->nameIdFormat;
        }

        if (null !== $this->nameIdValueExpression) {
            $res['NameIdValueExpression'] = $this->nameIdValueExpression;
        }

        if (null !== $this->optionalRelayStates) {
            if (\is_array($this->optionalRelayStates)) {
                $res['OptionalRelayStates'] = [];
                $n1 = 0;
                foreach ($this->optionalRelayStates as $item1) {
                    $res['OptionalRelayStates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requireAuthnRequestSigned) {
            $res['RequireAuthnRequestSigned'] = $this->requireAuthnRequestSigned;
        }

        if (null !== $this->responseSigned) {
            $res['ResponseSigned'] = $this->responseSigned;
        }

        if (null !== $this->signatureAlgorithm) {
            $res['SignatureAlgorithm'] = $this->signatureAlgorithm;
        }

        if (null !== $this->spEntityId) {
            $res['SpEntityId'] = $this->spEntityId;
        }

        if (null !== $this->spSigningCertificates) {
            if (\is_array($this->spSigningCertificates)) {
                $res['SpSigningCertificates'] = [];
                $n1 = 0;
                foreach ($this->spSigningCertificates as $item1) {
                    $res['SpSigningCertificates'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->spSloResponseUrl) {
            $res['SpSloResponseUrl'] = $this->spSloResponseUrl;
        }

        if (null !== $this->spSsoAcsUrl) {
            $res['SpSsoAcsUrl'] = $this->spSsoAcsUrl;
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
        if (isset($map['AssertionSigned'])) {
            $model->assertionSigned = $map['AssertionSigned'];
        }

        if (isset($map['AttributeStatements'])) {
            if (!empty($map['AttributeStatements'])) {
                $model->attributeStatements = [];
                $n1 = 0;
                foreach ($map['AttributeStatements'] as $item1) {
                    $model->attributeStatements[$n1] = attributeStatements::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DefaultRelayState'])) {
            $model->defaultRelayState = $map['DefaultRelayState'];
        }

        if (isset($map['IdPEntityId'])) {
            $model->idPEntityId = $map['IdPEntityId'];
        }

        if (isset($map['NameIdFormat'])) {
            $model->nameIdFormat = $map['NameIdFormat'];
        }

        if (isset($map['NameIdValueExpression'])) {
            $model->nameIdValueExpression = $map['NameIdValueExpression'];
        }

        if (isset($map['OptionalRelayStates'])) {
            if (!empty($map['OptionalRelayStates'])) {
                $model->optionalRelayStates = [];
                $n1 = 0;
                foreach ($map['OptionalRelayStates'] as $item1) {
                    $model->optionalRelayStates[$n1] = optionalRelayStates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequireAuthnRequestSigned'])) {
            $model->requireAuthnRequestSigned = $map['RequireAuthnRequestSigned'];
        }

        if (isset($map['ResponseSigned'])) {
            $model->responseSigned = $map['ResponseSigned'];
        }

        if (isset($map['SignatureAlgorithm'])) {
            $model->signatureAlgorithm = $map['SignatureAlgorithm'];
        }

        if (isset($map['SpEntityId'])) {
            $model->spEntityId = $map['SpEntityId'];
        }

        if (isset($map['SpSigningCertificates'])) {
            if (!empty($map['SpSigningCertificates'])) {
                $model->spSigningCertificates = [];
                $n1 = 0;
                foreach ($map['SpSigningCertificates'] as $item1) {
                    $model->spSigningCertificates[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SpSloResponseUrl'])) {
            $model->spSloResponseUrl = $map['SpSloResponseUrl'];
        }

        if (isset($map['SpSsoAcsUrl'])) {
            $model->spSsoAcsUrl = $map['SpSsoAcsUrl'];
        }

        return $model;
    }
}
