<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class MoMValues extends Model
{
    /**
     * @description total
     *
     * @var int
     */
    public $currentValue;

    /**
     * @description daily addition
     *
     * @var int
     */
    public $lastDayValue;

    /**
     * @description monthly addition
     *
     * @var int
     */
    public $lastMonthValue;
    protected $_name = [
        'currentValue' => 'currentValue',
        'lastDayValue' => 'lastDayValue',
        'lastMonthValue' => 'lastMonthValue',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentValue) {
            $res['currentValue'] = $this->currentValue;
        }
        if (null !== $this->lastDayValue) {
            $res['lastDayValue'] = $this->lastDayValue;
        }
        if (null !== $this->lastMonthValue) {
            $res['lastMonthValue'] = $this->lastMonthValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MoMValues
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['currentValue'])) {
            $model->currentValue = $map['currentValue'];
        }
        if (isset($map['lastDayValue'])) {
            $model->lastDayValue = $map['lastDayValue'];
        }
        if (isset($map['lastMonthValue'])) {
            $model->lastMonthValue = $map['lastMonthValue'];
        }

        return $model;
    }
}
