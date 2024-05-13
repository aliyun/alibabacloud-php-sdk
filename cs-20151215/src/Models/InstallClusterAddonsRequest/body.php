<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\InstallClusterAddonsRequest;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description The custom component settings that you want to use. The value is a JSON string.
     *
     * @example {\\"IngressDashboardEnabled\\":\\"true\\",\\"sls_project_name\\":\\"your_sls_project_name\\"}"}
     *
     * @var string
     */
    public $config;

    /**
     * @description The component name.
     *
     * This parameter is required.
     * @example ags-metrics-collector
     *
     * @var string
     */
    public $name;

    /**
     * @description The component version.
     *
     * This parameter is required.
     * @example v1.0.0.2-cc3b2d6-aliyun
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'config'  => 'config',
        'name'    => 'name',
        'version' => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
