<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models;

use AlibabaCloud\Dara\Model;

class QuerySessionListPopRequest extends Model
{
    /**
     * @var int
     */
    public $activityId;

    /**
     * @var string
     */
    public $nfcId;
    protected $_name = [
        'activityId' => 'ActivityId',
        'nfcId' => 'NfcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }

        if (null !== $this->nfcId) {
            $res['NfcId'] = $this->nfcId;
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
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }

        if (isset($map['NfcId'])) {
            $model->nfcId = $map['NfcId'];
        }

        return $model;
    }
}
