<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventRequest\recurrence;

use AlibabaCloud\Tea\Model;

class range extends Model
{
    /**
     * @example 2021-12-31T10:15:30+08:00
     *
     * @var string
     */
    public $endDate;

    /**
     * @example 1
     *
     * @var int
     */
    public $numberOfOccurrences;

    /**
     * @example endDate
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'endDate'             => 'endDate',
        'numberOfOccurrences' => 'numberOfOccurrences',
        'type'                => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }
        if (null !== $this->numberOfOccurrences) {
            $res['numberOfOccurrences'] = $this->numberOfOccurrences;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return range
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }
        if (isset($map['numberOfOccurrences'])) {
            $model->numberOfOccurrences = $map['numberOfOccurrences'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
