<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class SetExternalSAMLIdentityProviderRequest extends Model
{
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
     * @var string
     */
    public $loginUrl;

    /**
     * @var string
     */
    public $SSOStatus;

    /**
     * @var bool
     */
    public $wantRequestSigned;

    /**
     * @var string
     */
    public $x509Certificate;
    protected $_name = [
        'directoryId'             => 'DirectoryId',
        'encodedMetadataDocument' => 'EncodedMetadataDocument',
        'entityId'                => 'EntityId',
        'loginUrl'                => 'LoginUrl',
        'SSOStatus'               => 'SSOStatus',
        'wantRequestSigned'       => 'WantRequestSigned',
        'x509Certificate'         => 'X509Certificate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->encodedMetadataDocument) {
            $res['EncodedMetadataDocument'] = $this->encodedMetadataDocument;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->loginUrl) {
            $res['LoginUrl'] = $this->loginUrl;
        }
        if (null !== $this->SSOStatus) {
            $res['SSOStatus'] = $this->SSOStatus;
        }
        if (null !== $this->wantRequestSigned) {
            $res['WantRequestSigned'] = $this->wantRequestSigned;
        }
        if (null !== $this->x509Certificate) {
            $res['X509Certificate'] = $this->x509Certificate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetExternalSAMLIdentityProviderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['EncodedMetadataDocument'])) {
            $model->encodedMetadataDocument = $map['EncodedMetadataDocument'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['LoginUrl'])) {
            $model->loginUrl = $map['LoginUrl'];
        }
        if (isset($map['SSOStatus'])) {
            $model->SSOStatus = $map['SSOStatus'];
        }
        if (isset($map['WantRequestSigned'])) {
            $model->wantRequestSigned = $map['WantRequestSigned'];
        }
        if (isset($map['X509Certificate'])) {
            $model->x509Certificate = $map['X509Certificate'];
        }

        return $model;
    }
}
