<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class Rules extends Model
{
    /**
     * @var SchedulingRule
     */
    public $scheduling;
    protected $_name = [
        'scheduling' => 'Scheduling',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->scheduling) {
            $res['Scheduling'] = null !== $this->scheduling ? $this->scheduling->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Scheduling'])) {
            $model->scheduling = SchedulingRule::fromMap($map['Scheduling']);
        }

        return $model;
    }
}
