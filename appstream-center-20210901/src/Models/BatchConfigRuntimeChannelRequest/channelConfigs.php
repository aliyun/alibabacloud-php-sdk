<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\BatchConfigRuntimeChannelRequest;

use AlibabaCloud\Dara\Model;

class channelConfigs extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $configMode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $runtimeId;
    protected $_name = [
        'code' => 'Code',
        'config' => 'Config',
        'configMode' => 'ConfigMode',
        'name' => 'Name',
        'runtimeId' => 'RuntimeId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->configMode) {
            $res['ConfigMode'] = $this->configMode;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->runtimeId) {
            $res['RuntimeId'] = $this->runtimeId;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['ConfigMode'])) {
            $model->configMode = $map['ConfigMode'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RuntimeId'])) {
            $model->runtimeId = $map['RuntimeId'];
        }

        return $model;
    }
}
