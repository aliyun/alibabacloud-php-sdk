<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class UpdateGrafanaWorkspaceRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunLang;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $grafanaWorkspaceId;
    /**
     * @var string
     */
    public $grafanaWorkspaceName;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
