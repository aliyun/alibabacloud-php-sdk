<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetTrafficControlTaskResponseBody\trafficControlTargets;

use AlibabaCloud\Tea\Model;

class splitParts extends Model
{
    /**
     * @var int[]
     */
    public $setPoints;

    /**
     * @var int[]
     */
    public $timePoints;
    protected $_name = [
        'setPoints'  => 'SetPoints',
        'timePoints' => 'TimePoints',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->setPoints) {
            $res['SetPoints'] = $this->setPoints;
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
        if (isset($map['SetPoints'])) {
            if (!empty($map['SetPoints'])) {
                $model->setPoints = $map['SetPoints'];
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
