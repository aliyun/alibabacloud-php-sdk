<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetConsumerAccessOverviewResponseBody\data;

use AlibabaCloud\Dara\Model;

class quotas extends Model
{
    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $periodMultiplier;

    /**
     * @var string
     */
    public $periodType;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $subjectId;

    /**
     * @var string
     */
    public $subjectName;

    /**
     * @var string
     */
    public $subjectType;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var float
     */
    public $used;

    /**
     * @var string
     */
    public $windowAlignment;
    protected $_name = [
        'limit' => 'limit',
        'name' => 'name',
        'periodMultiplier' => 'periodMultiplier',
        'periodType' => 'periodType',
        'ruleId' => 'ruleId',
        'subjectId' => 'subjectId',
        'subjectName' => 'subjectName',
        'subjectType' => 'subjectType',
        'unit' => 'unit',
        'used' => 'used',
        'windowAlignment' => 'windowAlignment',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->periodMultiplier) {
            $res['periodMultiplier'] = $this->periodMultiplier;
        }

        if (null !== $this->periodType) {
            $res['periodType'] = $this->periodType;
        }

        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }

        if (null !== $this->subjectId) {
            $res['subjectId'] = $this->subjectId;
        }

        if (null !== $this->subjectName) {
            $res['subjectName'] = $this->subjectName;
        }

        if (null !== $this->subjectType) {
            $res['subjectType'] = $this->subjectType;
        }

        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }

        if (null !== $this->used) {
            $res['used'] = $this->used;
        }

        if (null !== $this->windowAlignment) {
            $res['windowAlignment'] = $this->windowAlignment;
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
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['periodMultiplier'])) {
            $model->periodMultiplier = $map['periodMultiplier'];
        }

        if (isset($map['periodType'])) {
            $model->periodType = $map['periodType'];
        }

        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }

        if (isset($map['subjectId'])) {
            $model->subjectId = $map['subjectId'];
        }

        if (isset($map['subjectName'])) {
            $model->subjectName = $map['subjectName'];
        }

        if (isset($map['subjectType'])) {
            $model->subjectType = $map['subjectType'];
        }

        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        if (isset($map['used'])) {
            $model->used = $map['used'];
        }

        if (isset($map['windowAlignment'])) {
            $model->windowAlignment = $map['windowAlignment'];
        }

        return $model;
    }
}
