<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class CreateNacosConfigRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The name of the application.
     *
     * @example saledatacenter-task
     *
     * @var string
     */
    public $appName;

    /**
     * @description The list of IP addresses where the beta release of the configuration is performed.
     *
     * @example 100.117.XX.XX,100.117.XX.XX
     *
     * @var string
     */
    public $betaIps;

    /**
     * @description The content of the configuration.
     *
     * @example asdf
     *
     * @var string
     */
    public $content;

    /**
     * @description The ID of the data.
     *
     * @example common.yaml
     *
     * @var string
     */
    public $dataId;

    /**
     * @description The description of the configuration.
     *
     * @example Basic module configuration.
     *
     * @var string
     */
    public $desc;

    /**
     * @description The ID of the group.
     *
     * @example alime-bridge-aliyun
     *
     * @var string
     */
    public $group;

    /**
     * @description The ID of the instance.
     *
     * @example mse_prepaid_public_cn-tl32****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the namespace.
     *
     * @example 547fd2a0-d0d6-****-80db2a1afb82
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @description The tags of the configuration.
     *
     * @example Basic configurations
     *
     * @var string
     */
    public $tags;

    /**
     * @description The configuration format such as text, JSON, or XML.
     *
     * @example text
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'appName'        => 'AppName',
        'betaIps'        => 'BetaIps',
        'content'        => 'Content',
        'dataId'         => 'DataId',
        'desc'           => 'Desc',
        'group'          => 'Group',
        'instanceId'     => 'InstanceId',
        'namespaceId'    => 'NamespaceId',
        'tags'           => 'Tags',
        'type'           => 'Type',
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
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
     * @return CreateNacosConfigRequest
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
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
