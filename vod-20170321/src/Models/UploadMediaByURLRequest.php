<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class UploadMediaByURLRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $storageLocation;

    /**
     * @var string
     */
    public $templateGroupId;

    /**
     * @var string
     */
    public $uploadMetadatas;

    /**
     * @var string
     */
    public $uploadURLs;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $workflowId;
    protected $_name = [
        'appId' => 'AppId',
        'sessionId' => 'SessionId',
        'storageLocation' => 'StorageLocation',
        'templateGroupId' => 'TemplateGroupId',
        'uploadMetadatas' => 'UploadMetadatas',
        'uploadURLs' => 'UploadURLs',
        'userData' => 'UserData',
        'workflowId' => 'WorkflowId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }

        if (null !== $this->templateGroupId) {
            $res['TemplateGroupId'] = $this->templateGroupId;
        }

        if (null !== $this->uploadMetadatas) {
            $res['UploadMetadatas'] = $this->uploadMetadatas;
        }

        if (null !== $this->uploadURLs) {
            $res['UploadURLs'] = $this->uploadURLs;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }

        if (isset($map['TemplateGroupId'])) {
            $model->templateGroupId = $map['TemplateGroupId'];
        }

        if (isset($map['UploadMetadatas'])) {
            $model->uploadMetadatas = $map['UploadMetadatas'];
        }

        if (isset($map['UploadURLs'])) {
            $model->uploadURLs = $map['UploadURLs'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}
