<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetTrafficControlTargetResponseBody;

use AlibabaCloud\Tea\Model;

class splitParts extends Model
{
    /**
     * @var int[]
     */
    public $setValues;

    /**
     * @var int[]
     */
    public $timePoints;
    protected $_name = [
        'setValues'  => 'SetValues',
        'timePoints' => 'TimePoints',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->setValues) {
            $res['SetValues'] = $this->setValues;
        }
        if (null !== $this->timePoints) {
            $res['TimePoints'] = $this->timePoints;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return splitParts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SetValues'])) {
            if (!empty($map['SetValues'])) {
                $model->setValues = $map['SetValues'];
            }
        }
        if (isset($map['TimePoints'])) {
            if (!empty($map['TimePoints'])) {
                $model->timePoints = $map['TimePoints'];
            }
        }

        return $model;
    }
}
