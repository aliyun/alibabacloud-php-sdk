<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\AddPipelineResponseBody;

use AlibabaCloud\SDK\Mts\V20140618\Models\AddPipelineResponseBody\pipeline\notifyConfig;
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
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $speed;

    /**
     * @var int
     */
    public $speedLevel;

    /**
     * @var int
     */
    public $quotaAllocate;

    /**
     * @var string
     */
    public $role;

    /**
     * @var notifyConfig
     */
    public $notifyConfig;
    protected $_name = [
        'id'            => 'Id',
        'name'          => 'Name',
        'state'         => 'State',
        'speed'         => 'Speed',
        'speedLevel'    => 'SpeedLevel',
        'quotaAllocate' => 'QuotaAllocate',
        'role'          => 'Role',
        'notifyConfig'  => 'NotifyConfig',
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
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }
        if (null !== $this->speedLevel) {
            $res['SpeedLevel'] = $this->speedLevel;
        }
        if (null !== $this->quotaAllocate) {
            $res['QuotaAllocate'] = $this->quotaAllocate;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->notifyConfig) {
            $res['NotifyConfig'] = null !== $this->notifyConfig ? $this->notifyConfig->toMap() : null;
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
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }
        if (isset($map['SpeedLevel'])) {
            $model->speedLevel = $map['SpeedLevel'];
        }
        if (isset($map['QuotaAllocate'])) {
            $model->quotaAllocate = $map['QuotaAllocate'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['NotifyConfig'])) {
            $model->notifyConfig = notifyConfig::fromMap($map['NotifyConfig']);
        }

        return $model;
    }
}
