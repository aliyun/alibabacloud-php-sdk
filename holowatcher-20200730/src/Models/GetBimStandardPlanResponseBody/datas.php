<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimStandardPlanResponseBody;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimStandardPlanResponseBody\datas\config;
use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimStandardPlanResponseBody\datas\templateConfig;
use AlibabaCloud\Tea\Model;

class datas extends Model
{
    /**
     * @description 标注配置信息
     *
     * @var config
     */
    public $config;

    /**
     * @description 标准图纸id
     *
     * @var int
     */
    public $id;

    /**
     * @description 标准图纸状态
     *
     * @var int
     */
    public $status;

    /**
     * @description 最近一次标注配置
     *
     * @var templateConfig
     */
    public $templateConfig;
    protected $_name = [
        'config'         => 'Config',
        'id'             => 'Id',
        'status'         => 'Status',
        'templateConfig' => 'TemplateConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = null !== $this->templateConfig ? $this->templateConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return datas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = templateConfig::fromMap($map['TemplateConfig']);
        }

        return $model;
    }
}
