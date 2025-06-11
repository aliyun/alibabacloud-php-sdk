<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetExternalSAMLIdentityProviderResponseBody;

use AlibabaCloud\Dara\Model;

class SAMLIdentityProviderConfiguration extends Model
{
    /**
     * @var string
     */
    public $bindingType;

    /**
     * @var string[]
     */
    public $certificateIds;

    /**
     * @var string
     */
    public $createTime;

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
     * @var string
     */
    public $updateTime;

    /**
     * @var bool
     */
    public $wantRequestSigned;
    protected $_name = [
        'bindingType' => 'BindingType',
        'certificateIds' => 'CertificateIds',
        'createTime' => 'CreateTime',
        'directoryId' => 'DirectoryId',
        'encodedMetadataDocument' => 'EncodedMetadataDocument',
        'entityId' => 'EntityId',
        'loginUrl' => 'LoginUrl',
        'SSOStatus' => 'SSOStatus',
        'updateTime' => 'UpdateTime',
        'wantRequestSigned' => 'WantRequestSigned',
    ];

    public function validate()
    {
        if (\is_array($this->certificateIds)) {
            Model::validateArray($this->certificateIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindingType) {
            $res['BindingType'] = $this->bindingType;
        }

        if (null !== $this->certificateIds) {
            if (\is_array($this->certificateIds)) {
                $res['CertificateIds'] = [];
                $n1 = 0;
                foreach ($this->certificateIds as $item1) {
                    $res['CertificateIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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

        if (null !== $this->loginUrl) {
            $res['LoginUrl'] = $this->loginUrl;
        }

        if (null !== $this->SSOStatus) {
            $res['SSOStatus'] = $this->SSOStatus;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->wantRequestSigned) {
            $res['WantRequestSigned'] = $this->wantRequestSigned;
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
        if (isset($map['BindingType'])) {
            $model->bindingType = $map['BindingType'];
        }

        if (isset($map['CertificateIds'])) {
            if (!empty($map['CertificateIds'])) {
                $model->certificateIds = [];
                $n1 = 0;
                foreach ($map['CertificateIds'] as $item1) {
                    $model->certificateIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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

        if (isset($map['LoginUrl'])) {
            $model->loginUrl = $map['LoginUrl'];
        }

        if (isset($map['SSOStatus'])) {
            $model->SSOStatus = $map['SSOStatus'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['WantRequestSigned'])) {
            $model->wantRequestSigned = $map['WantRequestSigned'];
        }

        return $model;
    }
}
