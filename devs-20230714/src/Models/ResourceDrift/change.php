<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\ResourceDrift;

use AlibabaCloud\Tea\Model;

class change extends Model
{
    /**
     * @var string[]
     */
    public $actions;

    /**
     * @example {"description":"mock deployment","id":"fc-demo-model-scope","internet_access":true,"last_modified":"2024-04-17T13:20:56Z","log_config":[],"name":"fc-demo-model-scope","name_prefix":null,"nas_config":[{"group_id":0,"mount_points":[{"mount_dir":"/mnt/auto","server_addr":"mock-addr.cn-shanghai.nas.aliyuncs.com:/fc-demo-model-scope"}],"user_id":0}],"publish":null,"role":"acs:ram::mock-role:role/aliyunfcdefaultrole","service_id":"mock-service","tags":null,"tracing_config":[],"version":null,"vpc_config":[{"security_group_id":"sg-mock","vpc_id":"vpc-mock","vswitch_ids":["vsw-mock"]}]}
     *
     * @var mixed
     */
    public $after;

    /**
     * @example {"description":"modelscope deployment","id":"fc-demo-model-scope","internet_access":true,"last_modified":"2024-04-17T13:20:56Z","log_config":[],"name":"fc-demo-model-scope","name_prefix":null,"nas_config":[{"group_id":0,"mount_points":[{"mount_dir":"/mnt/auto","server_addr":"mock-addr.cn-shanghai.nas.aliyuncs.com:/fc-demo-model-scope"}],"user_id":0}],"publish":null,"role":"acs:ram::mock-role:role/aliyunfcdefaultrole","service_id":"mock-service","tags":null,"tracing_config":[],"version":null,"vpc_config":[{"security_group_id":"sg-mock","vpc_id":"vpc-mock","vswitch_ids":["vsw-mock"]}]}
     *
     * @var mixed
     */
    public $before;
    protected $_name = [
        'actions' => 'actions',
        'after'   => 'after',
        'before'  => 'before',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actions) {
            $res['actions'] = $this->actions;
        }
        if (null !== $this->after) {
            $res['after'] = $this->after;
        }
        if (null !== $this->before) {
            $res['before'] = $this->before;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return change
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actions'])) {
            if (!empty($map['actions'])) {
                $model->actions = $map['actions'];
            }
        }
        if (isset($map['after'])) {
            $model->after = $map['after'];
        }
        if (isset($map['before'])) {
            $model->before = $map['before'];
        }

        return $model;
    }
}
