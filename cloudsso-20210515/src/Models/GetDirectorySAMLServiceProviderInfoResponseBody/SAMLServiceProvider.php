<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetDirectorySAMLServiceProviderInfoResponseBody;

use AlibabaCloud\Dara\Model;

class SAMLServiceProvider extends Model
{
    /**
     * @var string
     */
    public $acsUrl;

    /**
     * @var string
     */
    public $authnSignAlgo;

    /**
     * @var string
     */
    public $certificateType;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $encodedMetadataDocument;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var bool
     */
    public $supportEncryptedAssertion;
    protected $_name = [
        'acsUrl' => 'AcsUrl',
        'authnSignAlgo' => 'AuthnSignAlgo',
        'certificateType' => 'CertificateType',
        'directoryId' => 'DirectoryId',
        'encodedMetadataDocument' => 'EncodedMetadataDocument',
        'entityId' => 'EntityId',
        'supportEncryptedAssertion' => 'SupportEncryptedAssertion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acsUrl) {
            $res['AcsUrl'] = $this->acsUrl;
        }

        if (null !== $this->authnSignAlgo) {
            $res['AuthnSignAlgo'] = $this->authnSignAlgo;
        }

        if (null !== $this->certificateType) {
            $res['CertificateType'] = $this->certificateType;
        }

        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->encodedMetadataDocument) {
            $res['EncodedMetadataDocument'] = $this->encodedMetadataDocument;
        }

        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->supportEncryptedAssertion) {
            $res['SupportEncryptedAssertion'] = $this->supportEncryptedAssertion;
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
        if (isset($map['AcsUrl'])) {
            $model->acsUrl = $map['AcsUrl'];
        }

        if (isset($map['AuthnSignAlgo'])) {
            $model->authnSignAlgo = $map['AuthnSignAlgo'];
        }

        if (isset($map['CertificateType'])) {
            $model->certificateType = $map['CertificateType'];
        }

        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['EncodedMetadataDocument'])) {
            $model->encodedMetadataDocument = $map['EncodedMetadataDocument'];
        }

        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['SupportEncryptedAssertion'])) {
            $model->supportEncryptedAssertion = $map['SupportEncryptedAssertion'];
        }

        return $model;
    }
}
