<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListPluginForUuidResponseBody\aegisUuidTargetPluginConfigList;

use AlibabaCloud\Dara\Model;

class aegisSuspiciousConfigList extends Model
{
    /**
     * @var bool
     */
    public $config;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var bool
     */
    public $overallConfig;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'config' => 'Config',
        'msg' => 'Msg',
        'overallConfig' => 'OverallConfig',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }

        if (null !== $this->overallConfig) {
            $res['OverallConfig'] = $this->overallConfig;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }

        if (isset($map['OverallConfig'])) {
            $model->overallConfig = $map['OverallConfig'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
