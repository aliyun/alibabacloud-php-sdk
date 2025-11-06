<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryFailReasonForRegistrantProfileRealNameVerificationResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $failReason;
    protected $_name = [
        'date' => 'Date',
        'failReason' => 'FailReason',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        if (null !== $this->failReason) {
            $res['FailReason'] = $this->failReason;
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
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        if (isset($map['FailReason'])) {
            $model->failReason = $map['FailReason'];
        }

        return $model;
    }
}
