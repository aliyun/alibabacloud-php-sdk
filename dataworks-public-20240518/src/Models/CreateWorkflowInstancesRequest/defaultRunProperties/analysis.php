<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowInstancesRequest\defaultRunProperties;

use AlibabaCloud\Dara\Model;

class analysis extends Model
{
    /**
     * @var bool
     */
    public $blocked;

    /**
     * @var bool
     */
    public $enabled;
    protected $_name = [
        'blocked' => 'Blocked',
        'enabled' => 'Enabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blocked) {
            $res['Blocked'] = $this->blocked;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
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
        if (isset($map['Blocked'])) {
            $model->blocked = $map['Blocked'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        return $model;
    }
}
