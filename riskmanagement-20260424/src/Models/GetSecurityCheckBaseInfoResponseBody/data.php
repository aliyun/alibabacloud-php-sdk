<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetSecurityCheckBaseInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var bool
     */
    public $taskCompleted;
    protected $_name = [
        'enabled' => 'Enabled',
        'taskCompleted' => 'TaskCompleted',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->taskCompleted) {
            $res['TaskCompleted'] = $this->taskCompleted;
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
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['TaskCompleted'])) {
            $model->taskCompleted = $map['TaskCompleted'];
        }

        return $model;
    }
}
