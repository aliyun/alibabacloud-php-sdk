<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class GenerateWebofficeTokenRequest extends Model
{
    /**
     * @var bool
     */
    public $cachePreview;

    /**
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @var bool
     */
    public $externalUploaded;

    /**
     * @var string
     */
    public $filename;

    /**
     * @var bool
     */
    public $hidecmb;

    /**
     * @var Notification
     */
    public $notification;

    /**
     * @var string
     */
    public $notifyTopicName;

    /**
     * @var string
     */
    public $password;

    /**
     * @var WebofficePermission
     */
    public $permission;

    /**
     * @var int
     */
    public $previewPages;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $referer;

    /**
     * @var string
     */
    public $sourceURI;

    /**
     * @var WebofficeUser
     */
    public $user;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var WebofficeWatermark
     */
    public $watermark;
    protected $_name = [
        'cachePreview' => 'CachePreview',
        'credentialConfig' => 'CredentialConfig',
        'externalUploaded' => 'ExternalUploaded',
        'filename' => 'Filename',
        'hidecmb' => 'Hidecmb',
        'notification' => 'Notification',
        'notifyTopicName' => 'NotifyTopicName',
        'password' => 'Password',
        'permission' => 'Permission',
        'previewPages' => 'PreviewPages',
        'projectName' => 'ProjectName',
        'referer' => 'Referer',
        'sourceURI' => 'SourceURI',
        'user' => 'User',
        'userData' => 'UserData',
        'watermark' => 'Watermark',
    ];

    public function validate()
    {
        if (null !== $this->credentialConfig) {
            $this->credentialConfig->validate();
        }
        if (null !== $this->notification) {
            $this->notification->validate();
        }
        if (null !== $this->permission) {
            $this->permission->validate();
        }
        if (null !== $this->user) {
            $this->user->validate();
        }
        if (null !== $this->watermark) {
            $this->watermark->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cachePreview) {
            $res['CachePreview'] = $this->cachePreview;
        }

        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toArray($noStream) : $this->credentialConfig;
        }

        if (null !== $this->externalUploaded) {
            $res['ExternalUploaded'] = $this->externalUploaded;
        }

        if (null !== $this->filename) {
            $res['Filename'] = $this->filename;
        }

        if (null !== $this->hidecmb) {
            $res['Hidecmb'] = $this->hidecmb;
        }

        if (null !== $this->notification) {
            $res['Notification'] = null !== $this->notification ? $this->notification->toArray($noStream) : $this->notification;
        }

        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->permission) {
            $res['Permission'] = null !== $this->permission ? $this->permission->toArray($noStream) : $this->permission;
        }

        if (null !== $this->previewPages) {
            $res['PreviewPages'] = $this->previewPages;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->referer) {
            $res['Referer'] = $this->referer;
        }

        if (null !== $this->sourceURI) {
            $res['SourceURI'] = $this->sourceURI;
        }

        if (null !== $this->user) {
            $res['User'] = null !== $this->user ? $this->user->toArray($noStream) : $this->user;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        if (null !== $this->watermark) {
            $res['Watermark'] = null !== $this->watermark ? $this->watermark->toArray($noStream) : $this->watermark;
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
        if (isset($map['CachePreview'])) {
            $model->cachePreview = $map['CachePreview'];
        }

        if (isset($map['CredentialConfig'])) {
            $model->credentialConfig = CredentialConfig::fromMap($map['CredentialConfig']);
        }

        if (isset($map['ExternalUploaded'])) {
            $model->externalUploaded = $map['ExternalUploaded'];
        }

        if (isset($map['Filename'])) {
            $model->filename = $map['Filename'];
        }

        if (isset($map['Hidecmb'])) {
            $model->hidecmb = $map['Hidecmb'];
        }

        if (isset($map['Notification'])) {
            $model->notification = Notification::fromMap($map['Notification']);
        }

        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['Permission'])) {
            $model->permission = WebofficePermission::fromMap($map['Permission']);
        }

        if (isset($map['PreviewPages'])) {
            $model->previewPages = $map['PreviewPages'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['Referer'])) {
            $model->referer = $map['Referer'];
        }

        if (isset($map['SourceURI'])) {
            $model->sourceURI = $map['SourceURI'];
        }

        if (isset($map['User'])) {
            $model->user = WebofficeUser::fromMap($map['User']);
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        if (isset($map['Watermark'])) {
            $model->watermark = WebofficeWatermark::fromMap($map['Watermark']);
        }

        return $model;
    }
}
