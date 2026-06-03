<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypns\V20170620\Models\GetSmsCodeLimitConfigResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $limitDay;

    /**
     * @var int
     */
    public $limitHour;

    /**
     * @var int
     */
    public $limitId;

    /**
     * @var int
     */
    public $limitMinute;

    /**
     * @var string
     */
    public $limitOther;
    protected $_name = [
        'limitDay' => 'LimitDay',
        'limitHour' => 'LimitHour',
        'limitId' => 'LimitId',
        'limitMinute' => 'LimitMinute',
        'limitOther' => 'LimitOther',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->limitDay) {
            $res['LimitDay'] = $this->limitDay;
        }

        if (null !== $this->limitHour) {
            $res['LimitHour'] = $this->limitHour;
        }

        if (null !== $this->limitId) {
            $res['LimitId'] = $this->limitId;
        }

        if (null !== $this->limitMinute) {
            $res['LimitMinute'] = $this->limitMinute;
        }

        if (null !== $this->limitOther) {
            $res['LimitOther'] = $this->limitOther;
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
        if (isset($map['LimitDay'])) {
            $model->limitDay = $map['LimitDay'];
        }

        if (isset($map['LimitHour'])) {
            $model->limitHour = $map['LimitHour'];
        }

        if (isset($map['LimitId'])) {
            $model->limitId = $map['LimitId'];
        }

        if (isset($map['LimitMinute'])) {
            $model->limitMinute = $map['LimitMinute'];
        }

        if (isset($map['LimitOther'])) {
            $model->limitOther = $map['LimitOther'];
        }

        return $model;
    }
}
