<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class CreateServiceTaskRequest extends Model
{
    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $taskConfig;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'ip' => 'ip',
        'taskConfig' => 'taskConfig',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ip) {
            $res['ip'] = $this->ip;
        }

        if (null !== $this->taskConfig) {
            $res['taskConfig'] = $this->taskConfig;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['ip'])) {
            $model->ip = $map['ip'];
        }

        if (isset($map['taskConfig'])) {
            $model->taskConfig = $map['taskConfig'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
