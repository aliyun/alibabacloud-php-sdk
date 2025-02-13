<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsViewResponseBody\events\recurrence;

use AlibabaCloud\Dara\Model;

class range extends Model
{
    /**
     * @var string
     */
    public $endDate;
    /**
     * @var int
     */
    public $numberOfOccurrences;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
