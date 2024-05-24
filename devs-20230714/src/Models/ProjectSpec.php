<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class ProjectSpec extends Model
{
    /**
     * @example acs:ram::1431999****8149:role/aliyundevsdefaultrole
     *
     * @var string
     */
    public $roleArn;

    /**
     * @var TemplateConfig
     */
    public $templateConfig;

    /**
     * @example 9D72DE01-C732-49C0-8E85-FFD9D695436B
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'roleArn'        => 'roleArn',
        'templateConfig' => 'templateConfig',
        'token'          => 'token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleArn) {
            $res['roleArn'] = $this->roleArn;
        }
        if (null !== $this->templateConfig) {
            $res['templateConfig'] = null !== $this->templateConfig ? $this->templateConfig->toMap() : null;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProjectSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['roleArn'])) {
            $model->roleArn = $map['roleArn'];
        }
        if (isset($map['templateConfig'])) {
            $model->templateConfig = TemplateConfig::fromMap($map['templateConfig']);
        }
        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        return $model;
    }
}
