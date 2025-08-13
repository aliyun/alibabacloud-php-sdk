<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class DescribeRiskTagsLineChartRequest extends Model
{
    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $eventCodes;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $regId;
    protected $_name = [
        'beginTime' => 'BeginTime',
        'endTime' => 'EndTime',
        'eventCodes' => 'EventCodes',
        'lang' => 'Lang',
        'regId' => 'RegId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->eventCodes) {
            $res['EventCodes'] = $this->eventCodes;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->regId) {
            $res['RegId'] = $this->regId;
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
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EventCodes'])) {
            $model->eventCodes = $map['EventCodes'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['RegId'])) {
            $model->regId = $map['RegId'];
        }

        return $model;
    }
}
