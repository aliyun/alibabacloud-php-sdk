<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models\ListGlobalAppsResponseBody;

use AlibabaCloud\Tea\Model;

class globalApps extends Model
{
    /**
     * @description 应用默认版本
     *
     * @var string
     */
    public $appDefaultVersion;

    /**
     * @description 应用描述
     *
     * @var string
     */
    public $appDescription;

    /**
     * @description 应用计费说明
     *
     * @var string
     */
    public $appFee;

    /**
     * @description 应用名称
     *
     * @var string
     */
    public $appName;

    /**
     * @description 应用权限
     *
     * @var string
     */
    public $appScope;

    /**
     * @description 应用所属分类
     *
     * @var string[]
     */
    public $categories;

    /**
     * @description 更新时间
     *
     * @var string
     */
    public $lastModified;

    /**
     * @description 应用支持的区域ids
     *
     * @var string[]
     */
    public $locations;

    /**
     * @description 命名空间名称
     *
     * @var string
     */
    public $namespaceName;

    /**
     * @description 应用收藏置顶标记
     *
     * @var bool
     */
    public $pinned;

    /**
     * @description 应用工具合集
     *
     * @var string
     */
    public $toolkit;
    protected $_name = [
        'appDefaultVersion' => 'AppDefaultVersion',
        'appDescription'    => 'AppDescription',
        'appFee'            => 'AppFee',
        'appName'           => 'AppName',
        'appScope'          => 'AppScope',
        'categories'        => 'Categories',
        'lastModified'      => 'LastModified',
        'locations'         => 'Locations',
        'namespaceName'     => 'NamespaceName',
        'pinned'            => 'Pinned',
        'toolkit'           => 'Toolkit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appDefaultVersion) {
            $res['AppDefaultVersion'] = $this->appDefaultVersion;
        }
        if (null !== $this->appDescription) {
            $res['AppDescription'] = $this->appDescription;
        }
        if (null !== $this->appFee) {
            $res['AppFee'] = $this->appFee;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appScope) {
            $res['AppScope'] = $this->appScope;
        }
        if (null !== $this->categories) {
            $res['Categories'] = $this->categories;
        }
        if (null !== $this->lastModified) {
            $res['LastModified'] = $this->lastModified;
        }
        if (null !== $this->locations) {
            $res['Locations'] = $this->locations;
        }
        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
        }
        if (null !== $this->pinned) {
            $res['Pinned'] = $this->pinned;
        }
        if (null !== $this->toolkit) {
            $res['Toolkit'] = $this->toolkit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return globalApps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppDefaultVersion'])) {
            $model->appDefaultVersion = $map['AppDefaultVersion'];
        }
        if (isset($map['AppDescription'])) {
            $model->appDescription = $map['AppDescription'];
        }
        if (isset($map['AppFee'])) {
            $model->appFee = $map['AppFee'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppScope'])) {
            $model->appScope = $map['AppScope'];
        }
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = $map['Categories'];
            }
        }
        if (isset($map['LastModified'])) {
            $model->lastModified = $map['LastModified'];
        }
        if (isset($map['Locations'])) {
            if (!empty($map['Locations'])) {
                $model->locations = $map['Locations'];
            }
        }
        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
        }
        if (isset($map['Pinned'])) {
            $model->pinned = $map['Pinned'];
        }
        if (isset($map['Toolkit'])) {
            $model->toolkit = $map['Toolkit'];
        }

        return $model;
    }
}
