<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationSsoConfigResponseBody\applicationSsoConfig;

use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationSsoConfigResponseBody\applicationSsoConfig\samlSsoConfig\attributeStatements;
use AlibabaCloud\Tea\Model;

class samlSsoConfig extends Model
{
    /**
     * @description assertion是否签名
     *
     * @example true
     *
     * @var bool
     */
    public $assertionSigned;

    /**
     * @description The additional user attributes in the SAML assertion.
     *
     * @var attributeStatements[]
     */
    public $attributeStatements;

    /**
     * @description The default value of the RelayState attribute. If the SSO request is initiated in EIAM, the RelayState attribute in the SAML response is set to this default value.
     *
     * @example https://home.console.aliyun.com
     *
     * @var string
     */
    public $defaultRelayState;

    /**
     * @description The Format attribute of the NameID element in the SAML assertion. Valid values:
     *
     *   urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified: No format is specified. How to resolve the NameID element depends on the application.
     *   urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress: The NameID element must be an email address.
     *   urn:oasis:names:tc:SAML:2.0:nameid-format:persistent: The NameID element must be persistent.
     *   urn:oasis:names:tc:SAML:2.0:nameid-format:transient: The NameID element must be transient.
     *
     * @example urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified
     *
     * @var string
     */
    public $nameIdFormat;

    /**
     * @description The expression that is used to generate the value of NameID in the SAML assertion.
     *
     * @example user.username
     *
     * @var string
     */
    public $nameIdValueExpression;

    /**
     * @description response是否签名
     *
     * @example true
     *
     * @var bool
     */
    public $responseSigned;

    /**
     * @description The algorithm that is used to calculate the signature for the SAML assertion.
     *
     * @example RSA-SHA256
     *
     * @var string
     */
    public $signatureAlgorithm;

    /**
     * @description The entity ID of the application in SAML. The application assumes the role of service provider.
     *
     * @example urn:alibaba:cloudcomputing
     *
     * @var string
     */
    public $spEntityId;

    /**
     * @description The Assertion Consumer Service (ACS) URL of the application in SAML. The application assumes the role of service provider.
     *
     * @example https://signin.aliyun.com/saml-role/sso
     *
     * @var string
     */
    public $spSsoAcsUrl;
    protected $_name = [
        'assertionSigned'       => 'AssertionSigned',
        'attributeStatements'   => 'AttributeStatements',
        'defaultRelayState'     => 'DefaultRelayState',
        'nameIdFormat'          => 'NameIdFormat',
        'nameIdValueExpression' => 'NameIdValueExpression',
        'responseSigned'        => 'ResponseSigned',
        'signatureAlgorithm'    => 'SignatureAlgorithm',
        'spEntityId'            => 'SpEntityId',
        'spSsoAcsUrl'           => 'SpSsoAcsUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assertionSigned) {
            $res['AssertionSigned'] = $this->assertionSigned;
        }
        if (null !== $this->attributeStatements) {
            $res['AttributeStatements'] = [];
            if (null !== $this->attributeStatements && \is_array($this->attributeStatements)) {
                $n = 0;
                foreach ($this->attributeStatements as $item) {
                    $res['AttributeStatements'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->defaultRelayState) {
            $res['DefaultRelayState'] = $this->defaultRelayState;
        }
        if (null !== $this->nameIdFormat) {
            $res['NameIdFormat'] = $this->nameIdFormat;
        }
        if (null !== $this->nameIdValueExpression) {
            $res['NameIdValueExpression'] = $this->nameIdValueExpression;
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
        if (null !== $this->spSsoAcsUrl) {
            $res['SpSsoAcsUrl'] = $this->spSsoAcsUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return samlSsoConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssertionSigned'])) {
            $model->assertionSigned = $map['AssertionSigned'];
        }
        if (isset($map['AttributeStatements'])) {
            if (!empty($map['AttributeStatements'])) {
                $model->attributeStatements = [];
                $n                          = 0;
                foreach ($map['AttributeStatements'] as $item) {
                    $model->attributeStatements[$n++] = null !== $item ? attributeStatements::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DefaultRelayState'])) {
            $model->defaultRelayState = $map['DefaultRelayState'];
        }
        if (isset($map['NameIdFormat'])) {
            $model->nameIdFormat = $map['NameIdFormat'];
        }
        if (isset($map['NameIdValueExpression'])) {
            $model->nameIdValueExpression = $map['NameIdValueExpression'];
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
        if (isset($map['SpSsoAcsUrl'])) {
            $model->spSsoAcsUrl = $map['SpSsoAcsUrl'];
        }

        return $model;
    }
}
