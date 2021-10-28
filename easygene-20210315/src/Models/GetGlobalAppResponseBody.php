<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetGlobalAppResponseBody\appDescriptorFiles;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetGlobalAppResponseBody\appVersions;
use AlibabaCloud\Tea\Model;

class GetGlobalAppResponseBody extends Model
{
    /**
     * @description 默认版本
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
     * @description 应用的描述文件内容
     *
     * @var appDescriptorFiles[]
     */
    public $appDescriptorFiles;

    /**
     * @description 应用描述语言标准
     *
     * @var string
     */
    public $appDescriptorType;

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
     * @description 应用类型
     *
     * @var string
     */
    public $appType;

    /**
     * @description 应用版本
     *
     * @var string
     */
    public $appVersion;

    /**
     * @description 应用的所有版本列表
     *
     * @var appVersions[]
     */
    public $appVersions;

    /**
     * @description 应用所属分类
     *
     * @var string[]
     */
    public $categories;

    /**
     * @description 应用的备注信息
     *
     * @var string
     */
    public $comment;

    /**
     * @description 应用联系人信息
     *
     * @var string
     */
    public $contact;

    /**
     * @description 应用的DAG信息
     *
     * @var string
     */
    public $DAG;

    /**
     * @description 应用的帮助文档
     *
     * @var string
     */
    public $document;

    /**
     * @description 主机ID
     *
     * @var string
     */
    public $hostId;

    /**
     * @description 更新时间
     *
     * @var string
     */
    public $lastModified;

    /**
     * @description 应用主页信息
     *
     * @var string[]
     */
    public $links;

    /**
     * @description 应用支持的区域
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
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 应用所属工具合集
     *
     * @var string
     */
    public $toolkit;
    protected $_name = [
        'appDefaultVersion'  => 'AppDefaultVersion',
        'appDescription'     => 'AppDescription',
        'appDescriptorFiles' => 'AppDescriptorFiles',
        'appDescriptorType'  => 'AppDescriptorType',
        'appFee'             => 'AppFee',
        'appName'            => 'AppName',
        'appScope'           => 'AppScope',
        'appType'            => 'AppType',
        'appVersion'         => 'AppVersion',
        'appVersions'        => 'AppVersions',
        'categories'         => 'Categories',
        'comment'            => 'Comment',
        'contact'            => 'Contact',
        'DAG'                => 'DAG',
        'document'           => 'Document',
        'hostId'             => 'HostId',
        'lastModified'       => 'LastModified',
        'links'              => 'Links',
        'locations'          => 'Locations',
        'namespaceName'      => 'NamespaceName',
        'pinned'             => 'Pinned',
        'requestId'          => 'RequestId',
        'toolkit'            => 'Toolkit',
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
        if (null !== $this->appDescriptorFiles) {
            $res['AppDescriptorFiles'] = [];
            if (null !== $this->appDescriptorFiles && \is_array($this->appDescriptorFiles)) {
                $n = 0;
                foreach ($this->appDescriptorFiles as $item) {
                    $res['AppDescriptorFiles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->appDescriptorType) {
            $res['AppDescriptorType'] = $this->appDescriptorType;
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
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->appVersions) {
            $res['AppVersions'] = [];
            if (null !== $this->appVersions && \is_array($this->appVersions)) {
                $n = 0;
                foreach ($this->appVersions as $item) {
                    $res['AppVersions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->categories) {
            $res['Categories'] = $this->categories;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->contact) {
            $res['Contact'] = $this->contact;
        }
        if (null !== $this->DAG) {
            $res['DAG'] = $this->DAG;
        }
        if (null !== $this->document) {
            $res['Document'] = $this->document;
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->lastModified) {
            $res['LastModified'] = $this->lastModified;
        }
        if (null !== $this->links) {
            $res['Links'] = $this->links;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->toolkit) {
            $res['Toolkit'] = $this->toolkit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetGlobalAppResponseBody
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
        if (isset($map['AppDescriptorFiles'])) {
            if (!empty($map['AppDescriptorFiles'])) {
                $model->appDescriptorFiles = [];
                $n                         = 0;
                foreach ($map['AppDescriptorFiles'] as $item) {
                    $model->appDescriptorFiles[$n++] = null !== $item ? appDescriptorFiles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AppDescriptorType'])) {
            $model->appDescriptorType = $map['AppDescriptorType'];
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
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['AppVersions'])) {
            if (!empty($map['AppVersions'])) {
                $model->appVersions = [];
                $n                  = 0;
                foreach ($map['AppVersions'] as $item) {
                    $model->appVersions[$n++] = null !== $item ? appVersions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = $map['Categories'];
            }
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Contact'])) {
            $model->contact = $map['Contact'];
        }
        if (isset($map['DAG'])) {
            $model->DAG = $map['DAG'];
        }
        if (isset($map['Document'])) {
            $model->document = $map['Document'];
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['LastModified'])) {
            $model->lastModified = $map['LastModified'];
        }
        if (isset($map['Links'])) {
            if (!empty($map['Links'])) {
                $model->links = $map['Links'];
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Toolkit'])) {
            $model->toolkit = $map['Toolkit'];
        }

        return $model;
    }
}
