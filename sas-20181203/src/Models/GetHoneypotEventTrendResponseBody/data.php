<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotEventTrendResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of attacks that occurred.
     *
     * @example 5
     *
     * @var int
     */
    public $count;

    /**
     * @description The name of the attack.
     *
     * @example ATTACK_EVENT
     *
     * @var string
     */
    public $keyName;

    /**
     * @description The timestamp when the attack event occurred.
     *
     * @example 1686968163644
     *
     * @var int
     */
    public $timeStamp;
    protected $_name = [
        'count'     => 'Count',
        'keyName'   => 'KeyName',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->keyName) {
            $res['KeyName'] = $this->keyName;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['KeyName'])) {
            $model->keyName = $map['KeyName'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
