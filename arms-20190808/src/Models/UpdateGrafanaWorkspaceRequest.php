<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UpdateGrafanaWorkspaceRequest extends Model
{
    /**
     * @description The language. Valid values: zh and en. Default value: zh.
     *
     * @example zh
     *
     * @var string
     */
    public $aliyunLang;

    /**
     * @description The description of the workspace.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the workspace.
     *
     * This parameter is required.
     * @example grafana-cn-4xl3g******
     *
     * @var string
     */
    public $grafanaWorkspaceId;

    /**
     * @description The workspace name.
     *
     * @example testGrafana
     *
     * @var string
     */
    public $grafanaWorkspaceName;

    /**
     * @description The region ID. Default value: `cn-hangzhou`.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'aliyunLang'           => 'AliyunLang',
        'description'          => 'Description',
        'grafanaWorkspaceId'   => 'GrafanaWorkspaceId',
        'grafanaWorkspaceName' => 'GrafanaWorkspaceName',
        'regionId'             => 'RegionId',
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
        if (null !== $this->grafanaWorkspaceId) {
            $res['GrafanaWorkspaceId'] = $this->grafanaWorkspaceId;
        }
        if (null !== $this->grafanaWorkspaceName) {
            $res['GrafanaWorkspaceName'] = $this->grafanaWorkspaceName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGrafanaWorkspaceRequest
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
        if (isset($map['GrafanaWorkspaceId'])) {
            $model->grafanaWorkspaceId = $map['GrafanaWorkspaceId'];
        }
        if (isset($map['GrafanaWorkspaceName'])) {
            $model->grafanaWorkspaceName = $map['GrafanaWorkspaceName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
