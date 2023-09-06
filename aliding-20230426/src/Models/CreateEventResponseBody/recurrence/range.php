<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventResponseBody\recurrence;

use AlibabaCloud\Tea\Model;

class range extends Model
{
    /**
     * @example 2020-01-01T10:15:30+08:00
     *
     * @var string
     */
    public $endDate;

    /**
     * @example 5
     *
     * @var int
     */
    public $numberOfOccurrences;

    /**
     * @example noEnd
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'endDate'             => 'EndDate',
        'numberOfOccurrences' => 'NumberOfOccurrences',
        'type'                => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->numberOfOccurrences) {
            $res['NumberOfOccurrences'] = $this->numberOfOccurrences;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['NumberOfOccurrences'])) {
            $model->numberOfOccurrences = $map['NumberOfOccurrences'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
