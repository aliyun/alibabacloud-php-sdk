<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\EnrollAccountRequest;

use AlibabaCloud\Tea\Model;

class baselineItems extends Model
{
    /**
     * @description 基线项配置
     *
     * @var string
     */
    public $config;

    /**
     * @description 基线项名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 是否跳过基线项
     *
     * @var bool
     */
    public $skip;

    /**
     * @description 基线项版本
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'config'  => 'Config',
        'name'    => 'Name',
        'skip'    => 'Skip',
        'version' => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->skip) {
            $res['Skip'] = $this->skip;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return baselineItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Skip'])) {
            $model->skip = $map['Skip'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
