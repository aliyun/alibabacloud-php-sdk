<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;

class TranscriptionStarted extends Model
{
    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $openingRemarks;
    protected $_name = [
        'sessionId' => 'sessionId',
        'openingRemarks' => 'openingRemarks',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->openingRemarks) {
            $res['openingRemarks'] = $this->openingRemarks;
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
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['openingRemarks'])) {
            $model->openingRemarks = $map['openingRemarks'];
        }

        return $model;
    }
}
