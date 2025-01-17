<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class OperateCommonOverallConfigRequest extends Model
{
    /**
     * @var string
     */
    public $config;
    /**
     * @var bool
     */
    public $noTargetAsOn;
    /**
     * @var string
     */
    public $sourceIp;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'config'       => 'Config',
        'noTargetAsOn' => 'NoTargetAsOn',
        'sourceIp'     => 'SourceIp',
        'type'         => 'Type',
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

        if (null !== $this->noTargetAsOn) {
            $res['NoTargetAsOn'] = $this->noTargetAsOn;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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

        if (isset($map['NoTargetAsOn'])) {
            $model->noTargetAsOn = $map['NoTargetAsOn'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
