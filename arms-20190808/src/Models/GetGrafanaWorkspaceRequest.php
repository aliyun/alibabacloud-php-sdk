<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class GetGrafanaWorkspaceRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunLang;
    /**
     * @var string
     */
    public $grafanaWorkspaceId;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'aliyunLang'         => 'AliyunLang',
        'grafanaWorkspaceId' => 'GrafanaWorkspaceId',
        'regionId'           => 'RegionId',
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

        if (null !== $this->grafanaWorkspaceId) {
            $res['GrafanaWorkspaceId'] = $this->grafanaWorkspaceId;
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

        if (isset($map['GrafanaWorkspaceId'])) {
            $model->grafanaWorkspaceId = $map['GrafanaWorkspaceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
