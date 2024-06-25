<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Acm\V20200206\Models;

use AlibabaCloud\Tea\Model;

class DeployConfigurationRequest extends Model
{
    /**
     * @example app
     *
     * @var string
     */
    public $appName;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $betaIps;

    /**
     * @description This parameter is required.
     *
     * @example Hello World
     *
     * @var string
     */
    public $content;

    /**
     * @description This parameter is required.
     *
     * @example com.aliyun.acm.example
     *
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $desc;

    /**
     * @description This parameter is required.
     *
     * @example DEFAULT_GROUP
     *
     * @var string
     */
    public $group;

    /**
     * @description This parameter is required.
     *
     * @example 111000d2-ca66-42ba-b706-****
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @example tag1,tag2
     *
     * @var string
     */
    public $tags;

    /**
     * @example text
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'appName'     => 'AppName',
        'betaIps'     => 'BetaIps',
        'content'     => 'Content',
        'dataId'      => 'DataId',
        'desc'        => 'Desc',
        'group'       => 'Group',
        'namespaceId' => 'NamespaceId',
        'tags'        => 'Tags',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return DeployConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
