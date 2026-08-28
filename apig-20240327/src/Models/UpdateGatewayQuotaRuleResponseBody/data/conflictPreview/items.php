<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayQuotaRuleResponseBody\data\conflictPreview;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $conflictPeriodType;

    /**
     * @var string
     */
    public $conflictType;

    /**
     * @var string
     */
    public $consumerId;

    /**
     * @var string
     */
    public $consumerName;

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
    protected $_name = [
        'conflictPeriodType' => 'conflictPeriodType',
        'conflictType' => 'conflictType',
        'consumerId' => 'consumerId',
        'consumerName' => 'consumerName',
        'subjectId' => 'subjectId',
        'subjectName' => 'subjectName',
        'subjectType' => 'subjectType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conflictPeriodType) {
            $res['conflictPeriodType'] = $this->conflictPeriodType;
        }

        if (null !== $this->conflictType) {
            $res['conflictType'] = $this->conflictType;
        }

        if (null !== $this->consumerId) {
            $res['consumerId'] = $this->consumerId;
        }

        if (null !== $this->consumerName) {
            $res['consumerName'] = $this->consumerName;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['conflictPeriodType'])) {
            $model->conflictPeriodType = $map['conflictPeriodType'];
        }

        if (isset($map['conflictType'])) {
            $model->conflictType = $map['conflictType'];
        }

        if (isset($map['consumerId'])) {
            $model->consumerId = $map['consumerId'];
        }

        if (isset($map['consumerName'])) {
            $model->consumerName = $map['consumerName'];
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

        return $model;
    }
}
