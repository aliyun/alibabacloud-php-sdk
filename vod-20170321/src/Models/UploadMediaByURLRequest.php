<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UploadMediaByURLRequest extends Model
{
    /**
     * @var string
     */
    public $uploadURLs;

    /**
     * @var string
     */
    public $templateGroupId;

    /**
     * @var string
     */
    public $storageLocation;

    /**
     * @var string
     */
    public $uploadMetadatas;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var string
     */
    public $messageCallback;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $workflowId;
    protected $_name = [
        'uploadURLs'      => 'UploadURLs',
        'templateGroupId' => 'TemplateGroupId',
        'storageLocation' => 'StorageLocation',
        'uploadMetadatas' => 'UploadMetadatas',
        'priority'        => 'Priority',
        'messageCallback' => 'MessageCallback',
        'userData'        => 'UserData',
        'appId'           => 'AppId',
        'workflowId'      => 'WorkflowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uploadURLs) {
            $res['UploadURLs'] = $this->uploadURLs;
        }
        if (null !== $this->templateGroupId) {
            $res['TemplateGroupId'] = $this->templateGroupId;
        }
        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }
        if (null !== $this->uploadMetadatas) {
            $res['UploadMetadatas'] = $this->uploadMetadatas;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->messageCallback) {
            $res['MessageCallback'] = $this->messageCallback;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadMediaByURLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UploadURLs'])) {
            $model->uploadURLs = $map['UploadURLs'];
        }
        if (isset($map['TemplateGroupId'])) {
            $model->templateGroupId = $map['TemplateGroupId'];
        }
        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }
        if (isset($map['UploadMetadatas'])) {
            $model->uploadMetadatas = $map['UploadMetadatas'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['MessageCallback'])) {
            $model->messageCallback = $map['MessageCallback'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}
