<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetWebofficeURLShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $cachePreview;

    /**
     * @var string
     */
    public $credentialConfigShrink;

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
     * @var string
     */
    public $notifyTopicName;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $permissionShrink;

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
     * @var string
     */
    public $userShrink;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $watermarkShrink;
    protected $_name = [
        'cachePreview'           => 'CachePreview',
        'credentialConfigShrink' => 'CredentialConfig',
        'externalUploaded'       => 'ExternalUploaded',
        'filename'               => 'Filename',
        'hidecmb'                => 'Hidecmb',
        'notifyTopicName'        => 'NotifyTopicName',
        'password'               => 'Password',
        'permissionShrink'       => 'Permission',
        'previewPages'           => 'PreviewPages',
        'projectName'            => 'ProjectName',
        'referer'                => 'Referer',
        'sourceURI'              => 'SourceURI',
        'userShrink'             => 'User',
        'userData'               => 'UserData',
        'watermarkShrink'        => 'Watermark',
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
        if (null !== $this->credentialConfigShrink) {
            $res['CredentialConfig'] = $this->credentialConfigShrink;
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
        if (null !== $this->permissionShrink) {
            $res['Permission'] = $this->permissionShrink;
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
        if (null !== $this->userShrink) {
            $res['User'] = $this->userShrink;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->watermarkShrink) {
            $res['Watermark'] = $this->watermarkShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWebofficeURLShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CachePreview'])) {
            $model->cachePreview = $map['CachePreview'];
        }
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfigShrink = $map['CredentialConfig'];
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
            $model->permissionShrink = $map['Permission'];
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
            $model->userShrink = $map['User'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['Watermark'])) {
            $model->watermarkShrink = $map['Watermark'];
        }

        return $model;
    }
}
