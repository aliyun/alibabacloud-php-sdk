<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListBaselineCheckWhiteRecordResponseBody;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $checkId;
    /**
     * @var string
     */
    public $checkItem;
    /**
     * @var string
     */
    public $checkType;
    /**
     * @var string
     */
    public $checkTypeDisName;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var string
     */
    public $reason;
    /**
     * @var int
     */
    public $recordId;
    /**
     * @var string
     */
    public $source;
    /**
     * @var string
     */
    public $target;
    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'checkId'          => 'CheckId',
        'checkItem'        => 'CheckItem',
        'checkType'        => 'CheckType',
        'checkTypeDisName' => 'CheckTypeDisName',
        'lang'             => 'Lang',
        'reason'           => 'Reason',
        'recordId'         => 'RecordId',
        'source'           => 'Source',
        'target'           => 'Target',
        'targetType'       => 'TargetType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->checkItem) {
            $res['CheckItem'] = $this->checkItem;
        }

        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }

        if (null !== $this->checkTypeDisName) {
            $res['CheckTypeDisName'] = $this->checkTypeDisName;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
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
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['CheckItem'])) {
            $model->checkItem = $map['CheckItem'];
        }

        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }

        if (isset($map['CheckTypeDisName'])) {
            $model->checkTypeDisName = $map['CheckTypeDisName'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
