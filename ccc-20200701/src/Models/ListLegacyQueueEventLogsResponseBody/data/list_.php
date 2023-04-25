<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListLegacyQueueEventLogsResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 456328****
     *
     * @var string
     */
    public $acid;

    /**
     * @example 8012****
     *
     * @var string
     */
    public $ani;

    /**
     * @example agent@ccc-test
     *
     * @var string
     */
    public $answerPhone;

    /**
     * @example 15
     *
     * @var int
     */
    public $answerTime;

    /**
     * @var string
     */
    public $cause;

    /**
     * @example 1312211****
     *
     * @var string
     */
    public $dnis;

    /**
     * @var int
     */
    public $id;

    /**
     * @example 10
     *
     * @var int
     */
    public $queueTime;

    /**
     * @example 2021-12-03T10:15:30
     *
     * @var string
     */
    public $statisticDate;

    /**
     * @example acc3733
     *
     * @var string
     */
    public $tenantId;

    /**
     * @example skillgroup@ccc-test
     *
     * @var string
     */
    public $vq;
    protected $_name = [
        'acid'          => 'Acid',
        'ani'           => 'Ani',
        'answerPhone'   => 'AnswerPhone',
        'answerTime'    => 'AnswerTime',
        'cause'         => 'Cause',
        'dnis'          => 'Dnis',
        'id'            => 'Id',
        'queueTime'     => 'QueueTime',
        'statisticDate' => 'StatisticDate',
        'tenantId'      => 'TenantId',
        'vq'            => 'Vq',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return list_
     */
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
