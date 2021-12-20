<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class InventorySchedule extends Model
{
    /**
     * @var string
     */
    public $frequency;
    protected $_name = [
        'frequency' => 'Frequency',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InventorySchedule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Frequency'])) {
            $model->frequency = $map['Frequency'];
        }

        return $model;
    }
}
