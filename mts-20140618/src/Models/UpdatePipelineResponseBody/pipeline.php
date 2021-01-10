<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\UpdatePipelineResponseBody;

use AlibabaCloud\SDK\Mts\V20140618\Models\UpdatePipelineResponseBody\pipeline\notifyConfig;
use AlibabaCloud\Tea\Model;

class pipeline extends Model
{
    /**
     * @var string
     */
    public $speed;

    /**
     * @var string
     */
    public $state;

    /**
     * @var notifyConfig
     */
    public $notifyConfig;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $quotaAllocate;
    protected $_name = [
        'speed'         => 'Speed',
        'state'         => 'State',
        'notifyConfig'  => 'NotifyConfig',
        'name'          => 'Name',
        'role'          => 'Role',
        'id'            => 'Id',
        'quotaAllocate' => 'QuotaAllocate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->notifyConfig) {
            $res['NotifyConfig'] = null !== $this->notifyConfig ? $this->notifyConfig->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->quotaAllocate) {
            $res['QuotaAllocate'] = $this->quotaAllocate;
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
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['NotifyConfig'])) {
            $model->notifyConfig = notifyConfig::fromMap($map['NotifyConfig']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['QuotaAllocate'])) {
            $model->quotaAllocate = $map['QuotaAllocate'];
        }

        return $model;
    }
}
