<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class CollationTimeZone extends Model
{
    /**
     * @var string
     */
    public $currentTimeOffset;

    /**
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'currentTimeOffset' => 'CurrentTimeOffset',
        'timeZone' => 'TimeZone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentTimeOffset) {
            $res['CurrentTimeOffset'] = $this->currentTimeOffset;
        }

        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
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
        if (isset($map['CurrentTimeOffset'])) {
            $model->currentTimeOffset = $map['CurrentTimeOffset'];
        }

        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }

        return $model;
    }
}
