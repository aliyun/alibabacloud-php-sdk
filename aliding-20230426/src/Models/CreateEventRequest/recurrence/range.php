<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventRequest\recurrence;

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
        'endDate'             => 'endDate',
        'numberOfOccurrences' => 'numberOfOccurrences',
        'type'                => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
