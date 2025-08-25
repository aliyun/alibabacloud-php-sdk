<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListLegacyQueueEventLogsResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $acid;

    /**
     * @var string
     */
    public $ani;

    /**
     * @var string
     */
    public $answerPhone;

    /**
     * @var int
     */
    public $answerTime;

    /**
     * @var string
     */
    public $cause;

    /**
     * @var string
     */
    public $dnis;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $queueTime;

    /**
     * @var string
     */
    public $statisticDate;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $vq;
    protected $_name = [
        'acid' => 'Acid',
        'ani' => 'Ani',
        'answerPhone' => 'AnswerPhone',
        'answerTime' => 'AnswerTime',
        'cause' => 'Cause',
        'dnis' => 'Dnis',
        'id' => 'Id',
        'queueTime' => 'QueueTime',
        'statisticDate' => 'StatisticDate',
        'tenantId' => 'TenantId',
        'vq' => 'Vq',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acid) {
            $res['Acid'] = $this->acid;
        }

        if (null !== $this->ani) {
            $res['Ani'] = $this->ani;
        }

        if (null !== $this->answerPhone) {
            $res['AnswerPhone'] = $this->answerPhone;
        }

        if (null !== $this->answerTime) {
            $res['AnswerTime'] = $this->answerTime;
        }

        if (null !== $this->cause) {
            $res['Cause'] = $this->cause;
        }

        if (null !== $this->dnis) {
            $res['Dnis'] = $this->dnis;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->queueTime) {
            $res['QueueTime'] = $this->queueTime;
        }

        if (null !== $this->statisticDate) {
            $res['StatisticDate'] = $this->statisticDate;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->vq) {
            $res['Vq'] = $this->vq;
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
        if (isset($map['Acid'])) {
            $model->acid = $map['Acid'];
        }

        if (isset($map['Ani'])) {
            $model->ani = $map['Ani'];
        }

        if (isset($map['AnswerPhone'])) {
            $model->answerPhone = $map['AnswerPhone'];
        }

        if (isset($map['AnswerTime'])) {
            $model->answerTime = $map['AnswerTime'];
        }

        if (isset($map['Cause'])) {
            $model->cause = $map['Cause'];
        }

        if (isset($map['Dnis'])) {
            $model->dnis = $map['Dnis'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['QueueTime'])) {
            $model->queueTime = $map['QueueTime'];
        }

        if (isset($map['StatisticDate'])) {
            $model->statisticDate = $map['StatisticDate'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['Vq'])) {
            $model->vq = $map['Vq'];
        }

        return $model;
    }
}
