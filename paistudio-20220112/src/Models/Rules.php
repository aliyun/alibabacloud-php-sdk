<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class Rules extends Model
{
    /**
     * @var SchedulingRule
     */
    public $scheduling;
    protected $_name = [
        'scheduling' => 'Scheduling',
    ];

    public function validate()
    {
        if (null !== $this->scheduling) {
            $this->scheduling->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scheduling) {
            $res['Scheduling'] = null !== $this->scheduling ? $this->scheduling->toArray($noStream) : $this->scheduling;
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
        if (isset($map['Scheduling'])) {
            $model->scheduling = SchedulingRule::fromMap($map['Scheduling']);
        }

        return $model;
    }
}
