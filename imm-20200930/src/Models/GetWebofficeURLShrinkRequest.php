<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetWebofficeURLShrinkRequest extends Model
{
    /**
     * @description 链式授权
     *
     * @var string
     */
    public $assumeRoleChainShrink;

    /**
     * @description 缓存预览标识
     *
     * @var bool
     */
    public $cachePreview;

    /**
     * @description 是否支持外部上传
     *
     * @var bool
     */
    public $externalUploaded;

    /**
     * @description 文件名，必须带文件名后缀，默认是 SourceUri 的最后一级
     *
     * @var string
     */
    public $filename;

    /**
     * @description 隐藏工具栏，预览模式下使用
     *
     * @var bool
     */
    public $hidecmb;

    /**
     * @description mns 消息通知地址
     *
     * @var string
     */
    public $notifyEndpoint;

    /**
     * @description mns 消息通知 topic
     *
     * @var string
     */
    public $notifyTopicName;

    /**
     * @description 文件密码
     *
     * @var string
     */
    public $password;

    /**
     * @description 权限
     *
     * @var string
     */
    public $permissionShrink;

    /**
     * @description 预览前几页
     *
     * @var int
     */
    public $previewPages;

    /**
     * @description 项目名称
     *
     * @var string
     */
    public $projectName;

    /**
     * @description oss 防盗链 referer
     *
     * @var string
     */
    public $referer;

    /**
     * @description 预览编辑地址
     *
     * @var string
     */
    public $sourceURI;

    /**
     * @description 用户
     *
     * @var string
     */
    public $userShrink;

    /**
     * @description 用户自定义数据，在消息通知中返回
     *
     * @var string
     */
    public $userData;

    /**
     * @description 水印
     *
     * @var string
     */
    public $watermarkShrink;
    protected $_name = [
        'assumeRoleChainShrink' => 'AssumeRoleChain',
        'cachePreview'          => 'CachePreview',
        'externalUploaded'      => 'ExternalUploaded',
        'filename'              => 'Filename',
        'hidecmb'               => 'Hidecmb',
        'notifyEndpoint'        => 'NotifyEndpoint',
        'notifyTopicName'       => 'NotifyTopicName',
        'password'              => 'Password',
        'permissionShrink'      => 'Permission',
        'previewPages'          => 'PreviewPages',
        'projectName'           => 'ProjectName',
        'referer'               => 'Referer',
        'sourceURI'             => 'SourceURI',
        'userShrink'            => 'User',
        'userData'              => 'UserData',
        'watermarkShrink'       => 'Watermark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assumeRoleChainShrink) {
            $res['AssumeRoleChain'] = $this->assumeRoleChainShrink;
        }
        if (null !== $this->cachePreview) {
            $res['CachePreview'] = $this->cachePreview;
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
        if (null !== $this->notifyEndpoint) {
            $res['NotifyEndpoint'] = $this->notifyEndpoint;
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
        if (isset($map['AssumeRoleChain'])) {
            $model->assumeRoleChainShrink = $map['AssumeRoleChain'];
        }
        if (isset($map['CachePreview'])) {
            $model->cachePreview = $map['CachePreview'];
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
        if (isset($map['NotifyEndpoint'])) {
            $model->notifyEndpoint = $map['NotifyEndpoint'];
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
