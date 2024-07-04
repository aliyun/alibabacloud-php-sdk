<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models\QueryPipelineListResponseBody\pipelineList;

use AlibabaCloud\SDK\Mts\V20180528\Models\QueryPipelineListResponseBody\pipelineList\pipeline\notifyConfig;
use AlibabaCloud\Tea\Model;

class pipeline extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var notifyConfig
     */
    public $notifyConfig;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $speed;

    /**
     * @var int
     */
    public $speedLevel;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'id'           => 'Id',
        'name'         => 'Name',
        'notifyConfig' => 'NotifyConfig',
        'role'         => 'Role',
        'speed'        => 'Speed',
        'speedLevel'   => 'SpeedLevel',
        'state'        => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->notifyConfig) {
            $res['NotifyConfig'] = null !== $this->notifyConfig ? $this->notifyConfig->toMap() : null;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }
        if (null !== $this->speedLevel) {
            $res['SpeedLevel'] = $this->speedLevel;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pipeline
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NotifyConfig'])) {
            $model->notifyConfig = notifyConfig::fromMap($map['NotifyConfig']);
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }
        if (isset($map['SpeedLevel'])) {
            $model->speedLevel = $map['SpeedLevel'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
