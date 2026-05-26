<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\HistoryThreeElementsVerificationResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $isConsistent;

    /**
     * @var string
     */
    public $requestCarrier;
    protected $_name = [
        'isConsistent' => 'IsConsistent',
        'requestCarrier' => 'RequestCarrier',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isConsistent) {
            $res['IsConsistent'] = $this->isConsistent;
        }

        if (null !== $this->requestCarrier) {
            $res['RequestCarrier'] = $this->requestCarrier;
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
        if (isset($map['IsConsistent'])) {
            $model->isConsistent = $map['IsConsistent'];
        }

        if (isset($map['RequestCarrier'])) {
            $model->requestCarrier = $map['RequestCarrier'];
        }

        return $model;
    }
}
