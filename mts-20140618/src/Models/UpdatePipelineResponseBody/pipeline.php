<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\UpdatePipelineResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\UpdatePipelineResponseBody\pipeline\notifyConfig;

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
     * @var int
     */
    public $quotaAllocate;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $speed;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'id' => 'Id',
        'name' => 'Name',
        'notifyConfig' => 'NotifyConfig',
        'quotaAllocate' => 'QuotaAllocate',
        'role' => 'Role',
        'speed' => 'Speed',
        'state' => 'State',
    ];

    public function validate()
    {
        if (null !== $this->notifyConfig) {
            $this->notifyConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->notifyConfig) {
            $res['NotifyConfig'] = null !== $this->notifyConfig ? $this->notifyConfig->toArray($noStream) : $this->notifyConfig;
        }

        if (null !== $this->quotaAllocate) {
            $res['QuotaAllocate'] = $this->quotaAllocate;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NotifyConfig'])) {
            $model->notifyConfig = notifyConfig::fromMap($map['NotifyConfig']);
        }

        if (isset($map['QuotaAllocate'])) {
            $model->quotaAllocate = $map['QuotaAllocate'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
