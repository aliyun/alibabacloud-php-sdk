<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateGrafanaWorkspaceShrinkRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $aliyunLang;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example 10.0.x
     *
     * @var string
     */
    public $grafanaVersion;

    /**
     * @description This parameter is required.
     *
     * @example experts_edition
     *
     * @var string
     */
    public $grafanaWorkspaceEdition;

    /**
     * @description This parameter is required.
     *
     * @example testgrafana
     *
     * @var string
     */
    public $grafanaWorkspaceName;

    /**
     * @example Test123456!
     *
     * @var string
     */
    public $password;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-acfmxyexli2****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'aliyunLang'              => 'AliyunLang',
        'description'             => 'Description',
        'grafanaVersion'          => 'GrafanaVersion',
        'grafanaWorkspaceEdition' => 'GrafanaWorkspaceEdition',
        'grafanaWorkspaceName'    => 'GrafanaWorkspaceName',
        'password'                => 'Password',
        'regionId'                => 'RegionId',
        'resourceGroupId'         => 'ResourceGroupId',
        'tagsShrink'              => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunLang) {
            $res['AliyunLang'] = $this->aliyunLang;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->grafanaVersion) {
            $res['GrafanaVersion'] = $this->grafanaVersion;
        }
        if (null !== $this->grafanaWorkspaceEdition) {
            $res['GrafanaWorkspaceEdition'] = $this->grafanaWorkspaceEdition;
        }
        if (null !== $this->grafanaWorkspaceName) {
            $res['GrafanaWorkspaceName'] = $this->grafanaWorkspaceName;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGrafanaWorkspaceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunLang'])) {
            $model->aliyunLang = $map['AliyunLang'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GrafanaVersion'])) {
            $model->grafanaVersion = $map['GrafanaVersion'];
        }
        if (isset($map['GrafanaWorkspaceEdition'])) {
            $model->grafanaWorkspaceEdition = $map['GrafanaWorkspaceEdition'];
        }
        if (isset($map['GrafanaWorkspaceName'])) {
            $model->grafanaWorkspaceName = $map['GrafanaWorkspaceName'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}
