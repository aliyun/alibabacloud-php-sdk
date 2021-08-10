<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class GetScenePreviewInfoRequest extends Model
{
    /**
     * @description 模型token
     *
     * @var string
     */
    public $modelToken;

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
    protected $_name = [
        'modelToken' => 'ModelToken',
        'domain'     => 'Domain',
        'enabled'    => 'Enabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelToken) {
            $res['ModelToken'] = $this->modelToken;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetScenePreviewInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelToken'])) {
            $model->modelToken = $map['ModelToken'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        return $model;
    }
}
