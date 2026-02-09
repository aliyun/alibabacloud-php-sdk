<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetAutoClipsTaskInfoResponseBody\data\analysisResults\lensInfos;

use AlibabaCloud\Dara\Model;

class endTime extends Model
{
    /**
     * @var int
     */
    public $hour;

    /**
     * @var int
     */
    public $millSecond;

    /**
     * @var int
     */
    public $minute;

    /**
     * @var int
     */
    public $second;
    protected $_name = [
        'hour' => 'Hour',
        'millSecond' => 'MillSecond',
        'minute' => 'Minute',
        'second' => 'Second',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hour) {
            $res['Hour'] = $this->hour;
        }

        if (null !== $this->millSecond) {
            $res['MillSecond'] = $this->millSecond;
        }

        if (null !== $this->minute) {
            $res['Minute'] = $this->minute;
        }

        if (null !== $this->second) {
            $res['Second'] = $this->second;
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
        if (isset($map['Hour'])) {
            $model->hour = $map['Hour'];
        }

        if (isset($map['MillSecond'])) {
            $model->millSecond = $map['MillSecond'];
        }

        if (isset($map['Minute'])) {
            $model->minute = $map['Minute'];
        }

        if (isset($map['Second'])) {
            $model->second = $map['Second'];
        }

        return $model;
    }
}
