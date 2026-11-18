<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260707\Models;

use AlibabaCloud\Dara\Model;

class CreateUploadMediaRequest extends Model
{
    /**
     * @var string
     */
    public $credentialType;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $fileInfo;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $mediaMetaData;

    /**
     * @var bool
     */
    public $overwrite;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $storageLocation;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'credentialType' => 'CredentialType',
        'entityId' => 'EntityId',
        'fileInfo' => 'FileInfo',
        'mediaId' => 'MediaId',
        'mediaMetaData' => 'MediaMetaData',
        'overwrite' => 'Overwrite',
        'projectId' => 'ProjectId',
        'storageLocation' => 'StorageLocation',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentialType) {
            $res['CredentialType'] = $this->credentialType;
        }

        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->fileInfo) {
            $res['FileInfo'] = $this->fileInfo;
        }

        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        if (null !== $this->mediaMetaData) {
            $res['MediaMetaData'] = $this->mediaMetaData;
        }

        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['CredentialType'])) {
            $model->credentialType = $map['CredentialType'];
        }

        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['FileInfo'])) {
            $model->fileInfo = $map['FileInfo'];
        }

        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        if (isset($map['MediaMetaData'])) {
            $model->mediaMetaData = $map['MediaMetaData'];
        }

        if (isset($map['Overwrite'])) {
            $model->overwrite = $map['Overwrite'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
