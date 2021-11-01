<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class GetHotspotSceneDataRequest extends Model
{
    /**
     * @description 自定义oss域名（可为cdn域名）
     *
     * @var string
     */
    public $domain;

    /**
     * @description 是否开启自用资源访问
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description 预览token
     *
     * @var string
     */
    public $previewToken;

    /**
     * @description 0 未发布， 1 已发布
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'domain'       => 'Domain',
        'enabled'      => 'Enabled',
        'previewToken' => 'PreviewToken',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->previewToken) {
            $res['PreviewToken'] = $this->previewToken;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHotspotSceneDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['PreviewToken'])) {
            $model->previewToken = $map['PreviewToken'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
