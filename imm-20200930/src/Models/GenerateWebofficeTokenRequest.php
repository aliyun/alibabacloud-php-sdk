<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GenerateWebofficeTokenRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $cachePreview;

    /**
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @example false
     *
     * @var bool
     */
    public $externalUploaded;

    /**
     * @example test.pptx
     *
     * @var string
     */
    public $filename;

    /**
     * @example false
     *
     * @var bool
     */
    public $hidecmb;

    /**
     * @example topic1
     *
     * @var string
     */
    public $notifyTopicName;

    /**
     * @example 123456
     *
     * @var string
     */
    public $password;

    /**
     * @var WebofficePermission
     */
    public $permission;

    /**
     * @example 5
     *
     * @var int
     */
    public $previewPages;

    /**
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @example *
     *
     * @var string
     */
    public $referer;

    /**
     * @example oss://imm-test/test.pptx
     *
     * @var string
     */
    public $sourceURI;

    /**
     * @var WebofficeUser
     */
    public $user;

    /**
     * @example {"file_id": "abc"}
     *
     * @var string
     */
    public $userData;

    /**
     * @var WebofficeWatermark
     */
    public $watermark;
    protected $_name = [
        'cachePreview'     => 'CachePreview',
        'credentialConfig' => 'CredentialConfig',
        'externalUploaded' => 'ExternalUploaded',
        'filename'         => 'Filename',
        'hidecmb'          => 'Hidecmb',
        'notifyTopicName'  => 'NotifyTopicName',
        'password'         => 'Password',
        'permission'       => 'Permission',
        'previewPages'     => 'PreviewPages',
        'projectName'      => 'ProjectName',
        'referer'          => 'Referer',
        'sourceURI'        => 'SourceURI',
        'user'             => 'User',
        'userData'         => 'UserData',
        'watermark'        => 'Watermark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cachePreview) {
            $res['CachePreview'] = $this->cachePreview;
        }
        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toMap() : null;
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
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->permission) {
            $res['Permission'] = null !== $this->permission ? $this->permission->toMap() : null;
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
            $res['User'] = null !== $this->user ? $this->user->toMap() : null;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->watermark) {
            $res['Watermark'] = null !== $this->watermark ? $this->watermark->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateWebofficeTokenRequest
     */
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
