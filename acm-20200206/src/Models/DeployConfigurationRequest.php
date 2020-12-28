<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Acm\V20200206\Models;

use AlibabaCloud\Tea\Model;

class DeployConfigurationRequest extends Model
{
    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $group;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $betaIps;
    protected $_name = [
        'dataId'      => 'DataId',
        'appName'     => 'AppName',
        'group'       => 'Group',
        'desc'        => 'Desc',
        'tags'        => 'Tags',
        'content'     => 'Content',
        'type'        => 'Type',
        'namespaceId' => 'NamespaceId',
        'betaIps'     => 'BetaIps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->betaIps) {
            $res['BetaIps'] = $this->betaIps;
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
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['BetaIps'])) {
            $model->betaIps = $map['BetaIps'];
        }

        return $model;
    }
}
