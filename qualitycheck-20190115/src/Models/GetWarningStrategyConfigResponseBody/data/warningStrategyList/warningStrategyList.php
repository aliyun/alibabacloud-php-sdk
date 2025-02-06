<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetWarningStrategyConfigResponseBody\data\warningStrategyList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetWarningStrategyConfigResponseBody\data\warningStrategyList\warningStrategyList\range;

class warningStrategyList extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var int
     */
    public $duration;
    /**
     * @var int
     */
    public $durationExpression;
    /**
     * @var int
     */
    public $hitNumber;
    /**
     * @var int
     */
    public $hitNumberExpression;
    /**
     * @var string
     */
    public $hitRuleList;
    /**
     * @var int
     */
    public $hitType;
    /**
     * @var int
     */
    public $id;
    /**
     * @var range
     */
    public $range;
    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'code'                => 'Code',
        'duration'            => 'Duration',
        'durationExpression'  => 'DurationExpression',
        'hitNumber'           => 'HitNumber',
        'hitNumberExpression' => 'HitNumberExpression',
        'hitRuleList'         => 'HitRuleList',
        'hitType'             => 'HitType',
        'id'                  => 'Id',
        'range'               => 'Range',
        'status'              => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->range) {
            $this->range->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->durationExpression) {
            $res['DurationExpression'] = $this->durationExpression;
        }

        if (null !== $this->hitNumber) {
            $res['HitNumber'] = $this->hitNumber;
        }

        if (null !== $this->hitNumberExpression) {
            $res['HitNumberExpression'] = $this->hitNumberExpression;
        }

        if (null !== $this->hitRuleList) {
            $res['HitRuleList'] = $this->hitRuleList;
        }

        if (null !== $this->hitType) {
            $res['HitType'] = $this->hitType;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->range) {
            $res['Range'] = null !== $this->range ? $this->range->toArray($noStream) : $this->range;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['DurationExpression'])) {
            $model->durationExpression = $map['DurationExpression'];
        }

        if (isset($map['HitNumber'])) {
            $model->hitNumber = $map['HitNumber'];
        }

        if (isset($map['HitNumberExpression'])) {
            $model->hitNumberExpression = $map['HitNumberExpression'];
        }

        if (isset($map['HitRuleList'])) {
            $model->hitRuleList = $map['HitRuleList'];
        }

        if (isset($map['HitType'])) {
            $model->hitType = $map['HitType'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Range'])) {
            $model->range = range::fromMap($map['Range']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
