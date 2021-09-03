<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetWebofficeUrlShrinkRequest extends Model
{
    /**
     * @description 项目名称
     *
     * @var string
     */
    public $projectName;

    /**
     * @description 预览编辑地址
     *
     * @var string
     */
    public $sourceUri;

    /**
     * @description 文件名，必须带文件名后缀，默认是 SourceUri 的最后一级
     *
     * @var string
     */
    public $filename;

    /**
     * @description 用户自定义数据，在消息通知中返回
     *
     * @var string
     */
    public $userData;

    /**
     * @description 预览前几页
     *
     * @var int
     */
    public $previewPages;

    /**
     * @description 文件密码
     *
     * @var string
     */
    public $password;

    /**
     * @description 是否支持外部上传
     *
     * @var bool
     */
    public $externalUploaded;

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
     * @description 隐藏工具栏，预览模式下使用
     *
     * @var bool
     */
    public $hidecmb;

    /**
     * @description 权限
     *
     * @var string
     */
    public $permissionShrink;

    /**
     * @description 用户
     *
     * @var string
     */
    public $userShrink;

    /**
     * @description 水印
     *
     * @var string
     */
    public $watermarkShrink;

    /**
     * @description 链式授权
     *
     * @var string
     */
    public $assumeRoleChainShrink;
    protected $_name = [
        'projectName'           => 'ProjectName',
        'sourceUri'             => 'SourceUri',
        'filename'              => 'Filename',
        'userData'              => 'UserData',
        'previewPages'          => 'PreviewPages',
        'password'              => 'Password',
        'externalUploaded'      => 'ExternalUploaded',
        'notifyEndpoint'        => 'NotifyEndpoint',
        'notifyTopicName'       => 'NotifyTopicName',
        'hidecmb'               => 'Hidecmb',
        'permissionShrink'      => 'Permission',
        'userShrink'            => 'User',
        'watermarkShrink'       => 'Watermark',
        'assumeRoleChainShrink' => 'AssumeRoleChain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->sourceUri) {
            $res['SourceUri'] = $this->sourceUri;
        }
        if (null !== $this->filename) {
            $res['Filename'] = $this->filename;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->previewPages) {
            $res['PreviewPages'] = $this->previewPages;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->externalUploaded) {
            $res['ExternalUploaded'] = $this->externalUploaded;
        }
        if (null !== $this->notifyEndpoint) {
            $res['NotifyEndpoint'] = $this->notifyEndpoint;
        }
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
        }
        if (null !== $this->hidecmb) {
            $res['Hidecmb'] = $this->hidecmb;
        }
        if (null !== $this->permissionShrink) {
            $res['Permission'] = $this->permissionShrink;
        }
        if (null !== $this->userShrink) {
            $res['User'] = $this->userShrink;
        }
        if (null !== $this->watermarkShrink) {
            $res['Watermark'] = $this->watermarkShrink;
        }
        if (null !== $this->assumeRoleChainShrink) {
            $res['AssumeRoleChain'] = $this->assumeRoleChainShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWebofficeUrlShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['SourceUri'])) {
            $model->sourceUri = $map['SourceUri'];
        }
        if (isset($map['Filename'])) {
            $model->filename = $map['Filename'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['PreviewPages'])) {
            $model->previewPages = $map['PreviewPages'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['ExternalUploaded'])) {
            $model->externalUploaded = $map['ExternalUploaded'];
        }
        if (isset($map['NotifyEndpoint'])) {
            $model->notifyEndpoint = $map['NotifyEndpoint'];
        }
        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
        }
        if (isset($map['Hidecmb'])) {
            $model->hidecmb = $map['Hidecmb'];
        }
        if (isset($map['Permission'])) {
            $model->permissionShrink = $map['Permission'];
        }
        if (isset($map['User'])) {
            $model->userShrink = $map['User'];
        }
        if (isset($map['Watermark'])) {
            $model->watermarkShrink = $map['Watermark'];
        }
        if (isset($map['AssumeRoleChain'])) {
            $model->assumeRoleChainShrink = $map['AssumeRoleChain'];
        }

        return $model;
    }
}
