<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateNacosConfigRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     * - en: English
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The name of the application.
     *
     * @example postoffice
     *
     * @var string
     */
    public $appName;

    /**
     * @description The list of IP addresses where the beta release of the configuration is performed.
     *
     * @example 196.168.XX.XX
     *
     * @var string
     */
    public $betaIps;

    /**
     * @description The content of the configuration.
     *
     * @example attribute1=1221111\r\nattribute2=Chinese\r\nattribute3=abc11\r\nattribute4=1.00111
     *
     * @var string
     */
    public $content;

    /**
     * @description The ID of the configuration.
     *
     * @example ky-check-****.yml
     *
     * @var string
     */
    public $dataId;

    /**
     * @description The description of the configuration.
     *
     * @example Basic configuration
     *
     * @var string
     */
    public $desc;

    /**
     * @description The encryption key.
     *
     * @example 122wdwe****
     *
     * @var string
     */
    public $encryptedDataKey;

    /**
     * @description The name of the group.
     *
     * @example resource
     *
     * @var string
     */
    public $group;

    /**
     * @description The ID of the instance.
     *
     * @example mse-cn-7pp2a****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The MD5 value of the configuration.
     *
     * @example 045439703a273a94306422b****
     *
     * @var string
     */
    public $md5;

    /**
     * @description The ID of the namespace.
     *
     * @example 78b7af66-d15f-4541-b886-11ed81ecb6c0
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The tags of the configuration.
     *
     * @example 2021-10-20
     *
     * @var string
     */
    public $tags;

    /**
     * @description The format of the configuration. Supported formats include TEXT, JSON, XML, and HTML.
     *
     * @example text
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'acceptLanguage'   => 'AcceptLanguage',
        'appName'          => 'AppName',
        'betaIps'          => 'BetaIps',
        'content'          => 'Content',
        'dataId'           => 'DataId',
        'desc'             => 'Desc',
        'encryptedDataKey' => 'EncryptedDataKey',
        'group'            => 'Group',
        'instanceId'       => 'InstanceId',
        'md5'              => 'Md5',
        'namespaceId'      => 'NamespaceId',
        'tags'             => 'Tags',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->betaIps) {
            $res['BetaIps'] = $this->betaIps;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->encryptedDataKey) {
            $res['EncryptedDataKey'] = $this->encryptedDataKey;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateNacosConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['BetaIps'])) {
            $model->betaIps = $map['BetaIps'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['EncryptedDataKey'])) {
            $model->encryptedDataKey = $map['EncryptedDataKey'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
