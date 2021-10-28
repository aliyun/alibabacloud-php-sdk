<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models\ListAppsResponseBody;

use AlibabaCloud\Tea\Model;

class apps extends Model
{
    /**
     * @description 默认版本
     *
     * @var string
     */
    public $appDefaultVersion;

    /**
     * @description 应用名称
     *
     * @var string
     */
    public $appName;

    /**
     * @description 应用类型
     *
     * @var string
     */
    public $appType;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 应用描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 标签
     *
     * @var string[]
     */
    public $labels;

    /**
     * @description 应用描述语言
     *
     * @var string
     */
    public $language;

    /**
     * @description 应用可见范围
     *
     * @var string
     */
    public $scope;

    /**
     * @description 应用来源
     *
     * @var string
     */
    public $source;

    /**
     * @description 应用所在工作空间
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'appDefaultVersion' => 'AppDefaultVersion',
        'appName'           => 'AppName',
        'appType'           => 'AppType',
        'createTime'        => 'CreateTime',
        'description'       => 'Description',
        'labels'            => 'Labels',
        'language'          => 'Language',
        'scope'             => 'Scope',
        'source'            => 'Source',
        'workspace'         => 'Workspace',
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
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppDefaultVersion'])) {
            $model->appDefaultVersion = $map['AppDefaultVersion'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}
