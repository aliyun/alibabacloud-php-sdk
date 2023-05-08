<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyStrategyTargetRequest extends Model
{
    /**
     * @example {"strategyId":8070645}
     *
     * @var string
     */
    public $config;

    /**
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @example [{"Target":"9273980","BindUuidCount":5320,"TargetType":"groupId","Flag":"del"},{"Target":"9677606","TargetType":"groupId","Flag":"del"},{"Target":"10121607","BindUuidCount":7,"TargetType":"groupId","Flag":"add"},{"Target":"10670708","BindUuidCount":2,"TargetType":"groupId","Flag":"del"},{"Target":"11246338","BindUuidCount":6,"TargetType":"groupId","Flag":"del"},{"Target":"11291161","BindUuidCount":13,"TargetType":"groupId","Flag":"del"}]
     *
     * @var string
     */
    public $target;

    /**
     * @example hc_strategy
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'config'   => 'Config',
        'sourceIp' => 'SourceIp',
        'target'   => 'Target',
        'type'     => 'Type',
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
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyStrategyTargetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
