<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateBaselineRequest\alertSettings;

use AlibabaCloud\Dara\Model;

class topicSlowConfig extends Model
{
    /**
     * @var int
     */
    public $minOver;

    /**
     * @var float
     */
    public $overFactor;
    protected $_name = [
        'minOver' => 'MinOver',
        'overFactor' => 'OverFactor',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->minOver) {
            $res['MinOver'] = $this->minOver;
        }

        if (null !== $this->overFactor) {
            $res['OverFactor'] = $this->overFactor;
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
        if (isset($map['MinOver'])) {
            $model->minOver = $map['MinOver'];
        }

        if (isset($map['OverFactor'])) {
            $model->overFactor = $map['OverFactor'];
        }

        return $model;
    }
}
