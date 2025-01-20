<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class UpdateNacosConfigRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;
    /**
     * @var string
     */
    public $appName;
    /**
     * @var string
     */
    public $betaIps;
    /**
     * @var string
     */
    public $content;
    /**
     * @var string
     */
    public $dataId;
    /**
     * @var string
     */
    public $desc;
    /**
     * @var string
     */
    public $encryptedDataKey;
    /**
     * @var string
     */
    public $group;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $md5;
    /**
     * @var string
     */
    public $namespaceId;
    /**
     * @var string
     */
    public $tags;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
