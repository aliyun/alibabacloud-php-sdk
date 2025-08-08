<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class MoMValues extends Model
{
    /**
     * @var int
     */
    public $currentValue;

    /**
     * @var int
     */
    public $lastDayValue;

    /**
     * @var int
     */
    public $lastMonthValue;
    protected $_name = [
        'currentValue' => 'currentValue',
        'lastDayValue' => 'lastDayValue',
        'lastMonthValue' => 'lastMonthValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
