<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\UpdateOncallScheduleRequest;

use AlibabaCloud\Dara\Model;

class substitudes extends Model
{
    /**
     * @var string
     */
    public $contactId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $replacedContactId;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'contactId' => 'contactId',
        'endTime' => 'endTime',
        'replacedContactId' => 'replacedContactId',
        'startTime' => 'startTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactId) {
            $res['contactId'] = $this->contactId;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->replacedContactId) {
            $res['replacedContactId'] = $this->replacedContactId;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
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
        if (isset($map['contactId'])) {
            $model->contactId = $map['contactId'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['replacedContactId'])) {
            $model->replacedContactId = $map['replacedContactId'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
