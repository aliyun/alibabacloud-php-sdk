<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class DescribeTagsRatioLineChartRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var string
     */
    public $byPassEventCodes;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $mainEventCodes;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $shuntEventCodes;
    protected $_name = [
        'lang' => 'Lang',
        'beginTime' => 'beginTime',
        'byPassEventCodes' => 'byPassEventCodes',
        'endTime' => 'endTime',
        'mainEventCodes' => 'mainEventCodes',
        'regId' => 'regId',
        'shuntEventCodes' => 'shuntEventCodes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->beginTime) {
            $res['beginTime'] = $this->beginTime;
        }

        if (null !== $this->byPassEventCodes) {
            $res['byPassEventCodes'] = $this->byPassEventCodes;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->mainEventCodes) {
            $res['mainEventCodes'] = $this->mainEventCodes;
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        if (null !== $this->shuntEventCodes) {
            $res['shuntEventCodes'] = $this->shuntEventCodes;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['beginTime'])) {
            $model->beginTime = $map['beginTime'];
        }

        if (isset($map['byPassEventCodes'])) {
            $model->byPassEventCodes = $map['byPassEventCodes'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['mainEventCodes'])) {
            $model->mainEventCodes = $map['mainEventCodes'];
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        if (isset($map['shuntEventCodes'])) {
            $model->shuntEventCodes = $map['shuntEventCodes'];
        }

        return $model;
    }
}
