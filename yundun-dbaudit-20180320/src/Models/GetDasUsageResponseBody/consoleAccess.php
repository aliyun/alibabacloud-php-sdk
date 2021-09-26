<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetDasUsageResponseBody;

use AlibabaCloud\Tea\Model;

class consoleAccess extends Model
{
    /**
     * @var string
     */
    public $lastAccessTime;

    /**
     * @var int
     */
    public $day90AccessCount;

    /**
     * @var int
     */
    public $day15AccessCount;

    /**
     * @var int
     */
    public $day30AccessCount;

    /**
     * @var int
     */
    public $day180AccessCount;
    protected $_name = [
        'lastAccessTime'    => 'LastAccessTime',
        'day90AccessCount'  => 'Day90AccessCount',
        'day15AccessCount'  => 'Day15AccessCount',
        'day30AccessCount'  => 'Day30AccessCount',
        'day180AccessCount' => 'Day180AccessCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastAccessTime) {
            $res['LastAccessTime'] = $this->lastAccessTime;
        }
        if (null !== $this->day90AccessCount) {
            $res['Day90AccessCount'] = $this->day90AccessCount;
        }
        if (null !== $this->day15AccessCount) {
            $res['Day15AccessCount'] = $this->day15AccessCount;
        }
        if (null !== $this->day30AccessCount) {
            $res['Day30AccessCount'] = $this->day30AccessCount;
        }
        if (null !== $this->day180AccessCount) {
            $res['Day180AccessCount'] = $this->day180AccessCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return consoleAccess
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LastAccessTime'])) {
            $model->lastAccessTime = $map['LastAccessTime'];
        }
        if (isset($map['Day90AccessCount'])) {
            $model->day90AccessCount = $map['Day90AccessCount'];
        }
        if (isset($map['Day15AccessCount'])) {
            $model->day15AccessCount = $map['Day15AccessCount'];
        }
        if (isset($map['Day30AccessCount'])) {
            $model->day30AccessCount = $map['Day30AccessCount'];
        }
        if (isset($map['Day180AccessCount'])) {
            $model->day180AccessCount = $map['Day180AccessCount'];
        }

        return $model;
    }
}
