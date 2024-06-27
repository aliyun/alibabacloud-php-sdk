<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class DescribeScoreSectionNumLineChartRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $beginTime;

    /**
     * @var string
     */
    public $byPassEventCodes;

    /**
     * @description This parameter is required.
     *
     * @var string
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
        'lang'             => 'Lang',
        'beginTime'        => 'beginTime',
        'byPassEventCodes' => 'byPassEventCodes',
        'endTime'          => 'endTime',
        'mainEventCodes'   => 'mainEventCodes',
        'regId'            => 'regId',
        'shuntEventCodes'  => 'shuntEventCodes',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeScoreSectionNumLineChartRequest
     */
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
