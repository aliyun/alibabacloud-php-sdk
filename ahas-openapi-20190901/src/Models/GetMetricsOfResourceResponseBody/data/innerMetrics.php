<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetMetricsOfResourceResponseBody\data;

use AlibabaCloud\Tea\Model;

class innerMetrics extends Model
{
    /**
     * @var float
     */
    public $rtP99;

    /**
     * @var float
     */
    public $successQpsAvg;

    /**
     * @var float
     */
    public $passedQpsP99;

    /**
     * @var float
     */
    public $rtAvg;

    /**
     * @var int
     */
    public $count;

    /**
     * @var float
     */
    public $threadStd;

    /**
     * @var float
     */
    public $passedQpsAvg;

    /**
     * @var float
     */
    public $exceptionP95;

    /**
     * @var float
     */
    public $successQpsMax;

    /**
     * @var float
     */
    public $rtP95;

    /**
     * @var float
     */
    public $blockedQpsMin;

    /**
     * @var float
     */
    public $blockedQps;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var float
     */
    public $threadP95;

    /**
     * @var float
     */
    public $rtStd;

    /**
     * @var float
     */
    public $passedQpsMin;

    /**
     * @var float
     */
    public $blockedQpsP99;

    /**
     * @var float
     */
    public $passedQpsMax;

    /**
     * @var float
     */
    public $exceptionMax;

    /**
     * @var float
     */
    public $successQps;

    /**
     * @var float
     */
    public $successQpsP75;

    /**
     * @var float
     */
    public $threadP75;

    /**
     * @var float
     */
    public $successQpsStd;

    /**
     * @var float
     */
    public $exceptionMin;

    /**
     * @var float
     */
    public $passedQpsP75;

    /**
     * @var float
     */
    public $passedQps;

    /**
     * @var float
     */
    public $threadMax;

    /**
     * @var float
     */
    public $successQpsP99;

    /**
     * @var float
     */
    public $successQpsMin;

    /**
     * @var float
     */
    public $threadP99;

    /**
     * @var float
     */
    public $exceptionStd;

    /**
     * @var float
     */
    public $blockedQpsP95;

    /**
     * @var float
     */
    public $thread;

    /**
     * @var float
     */
    public $threadMin;

    /**
     * @var float
     */
    public $rtMin;

    /**
     * @var float
     */
    public $blockedQpsAvg;

    /**
     * @var float
     */
    public $threadAvg;

    /**
     * @var float
     */
    public $blockedQpsP75;

    /**
     * @var float
     */
    public $rtP75;

    /**
     * @var float
     */
    public $exceptionP99;

    /**
     * @var float
     */
    public $exceptionP75;

    /**
     * @var float
     */
    public $successQpsP95;

    /**
     * @var float
     */
    public $rt;

    /**
     * @var float
     */
    public $passedQpsP95;

    /**
     * @var float
     */
    public $rtMax;

    /**
     * @var float
     */
    public $blockedQpsStd;

    /**
     * @var float
     */
    public $blockedQpsMax;

    /**
     * @var float
     */
    public $exception;

    /**
     * @var float
     */
    public $exceptionAvg;

    /**
     * @var float
     */
    public $passedQpsStd;
    protected $_name = [
        'rtP99'         => 'RtP99',
        'successQpsAvg' => 'SuccessQpsAvg',
        'passedQpsP99'  => 'PassedQpsP99',
        'rtAvg'         => 'RtAvg',
        'count'         => 'Count',
        'threadStd'     => 'ThreadStd',
        'passedQpsAvg'  => 'PassedQpsAvg',
        'exceptionP95'  => 'ExceptionP95',
        'successQpsMax' => 'SuccessQpsMax',
        'rtP95'         => 'RtP95',
        'blockedQpsMin' => 'BlockedQpsMin',
        'blockedQps'    => 'BlockedQps',
        'timestamp'     => 'Timestamp',
        'threadP95'     => 'ThreadP95',
        'rtStd'         => 'RtStd',
        'passedQpsMin'  => 'PassedQpsMin',
        'blockedQpsP99' => 'BlockedQpsP99',
        'passedQpsMax'  => 'PassedQpsMax',
        'exceptionMax'  => 'ExceptionMax',
        'successQps'    => 'SuccessQps',
        'successQpsP75' => 'SuccessQpsP75',
        'threadP75'     => 'ThreadP75',
        'successQpsStd' => 'SuccessQpsStd',
        'exceptionMin'  => 'ExceptionMin',
        'passedQpsP75'  => 'PassedQpsP75',
        'passedQps'     => 'PassedQps',
        'threadMax'     => 'ThreadMax',
        'successQpsP99' => 'SuccessQpsP99',
        'successQpsMin' => 'SuccessQpsMin',
        'threadP99'     => 'ThreadP99',
        'exceptionStd'  => 'ExceptionStd',
        'blockedQpsP95' => 'BlockedQpsP95',
        'thread'        => 'Thread',
        'threadMin'     => 'ThreadMin',
        'rtMin'         => 'RtMin',
        'blockedQpsAvg' => 'BlockedQpsAvg',
        'threadAvg'     => 'ThreadAvg',
        'blockedQpsP75' => 'BlockedQpsP75',
        'rtP75'         => 'RtP75',
        'exceptionP99'  => 'ExceptionP99',
        'exceptionP75'  => 'ExceptionP75',
        'successQpsP95' => 'SuccessQpsP95',
        'rt'            => 'Rt',
        'passedQpsP95'  => 'PassedQpsP95',
        'rtMax'         => 'RtMax',
        'blockedQpsStd' => 'BlockedQpsStd',
        'blockedQpsMax' => 'BlockedQpsMax',
        'exception'     => 'Exception',
        'exceptionAvg'  => 'ExceptionAvg',
        'passedQpsStd'  => 'PassedQpsStd',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rtP99) {
            $res['RtP99'] = $this->rtP99;
        }
        if (null !== $this->successQpsAvg) {
            $res['SuccessQpsAvg'] = $this->successQpsAvg;
        }
        if (null !== $this->passedQpsP99) {
            $res['PassedQpsP99'] = $this->passedQpsP99;
        }
        if (null !== $this->rtAvg) {
            $res['RtAvg'] = $this->rtAvg;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->threadStd) {
            $res['ThreadStd'] = $this->threadStd;
        }
        if (null !== $this->passedQpsAvg) {
            $res['PassedQpsAvg'] = $this->passedQpsAvg;
        }
        if (null !== $this->exceptionP95) {
            $res['ExceptionP95'] = $this->exceptionP95;
        }
        if (null !== $this->successQpsMax) {
            $res['SuccessQpsMax'] = $this->successQpsMax;
        }
        if (null !== $this->rtP95) {
            $res['RtP95'] = $this->rtP95;
        }
        if (null !== $this->blockedQpsMin) {
            $res['BlockedQpsMin'] = $this->blockedQpsMin;
        }
        if (null !== $this->blockedQps) {
            $res['BlockedQps'] = $this->blockedQps;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->threadP95) {
            $res['ThreadP95'] = $this->threadP95;
        }
        if (null !== $this->rtStd) {
            $res['RtStd'] = $this->rtStd;
        }
        if (null !== $this->passedQpsMin) {
            $res['PassedQpsMin'] = $this->passedQpsMin;
        }
        if (null !== $this->blockedQpsP99) {
            $res['BlockedQpsP99'] = $this->blockedQpsP99;
        }
        if (null !== $this->passedQpsMax) {
            $res['PassedQpsMax'] = $this->passedQpsMax;
        }
        if (null !== $this->exceptionMax) {
            $res['ExceptionMax'] = $this->exceptionMax;
        }
        if (null !== $this->successQps) {
            $res['SuccessQps'] = $this->successQps;
        }
        if (null !== $this->successQpsP75) {
            $res['SuccessQpsP75'] = $this->successQpsP75;
        }
        if (null !== $this->threadP75) {
            $res['ThreadP75'] = $this->threadP75;
        }
        if (null !== $this->successQpsStd) {
            $res['SuccessQpsStd'] = $this->successQpsStd;
        }
        if (null !== $this->exceptionMin) {
            $res['ExceptionMin'] = $this->exceptionMin;
        }
        if (null !== $this->passedQpsP75) {
            $res['PassedQpsP75'] = $this->passedQpsP75;
        }
        if (null !== $this->passedQps) {
            $res['PassedQps'] = $this->passedQps;
        }
        if (null !== $this->threadMax) {
            $res['ThreadMax'] = $this->threadMax;
        }
        if (null !== $this->successQpsP99) {
            $res['SuccessQpsP99'] = $this->successQpsP99;
        }
        if (null !== $this->successQpsMin) {
            $res['SuccessQpsMin'] = $this->successQpsMin;
        }
        if (null !== $this->threadP99) {
            $res['ThreadP99'] = $this->threadP99;
        }
        if (null !== $this->exceptionStd) {
            $res['ExceptionStd'] = $this->exceptionStd;
        }
        if (null !== $this->blockedQpsP95) {
            $res['BlockedQpsP95'] = $this->blockedQpsP95;
        }
        if (null !== $this->thread) {
            $res['Thread'] = $this->thread;
        }
        if (null !== $this->threadMin) {
            $res['ThreadMin'] = $this->threadMin;
        }
        if (null !== $this->rtMin) {
            $res['RtMin'] = $this->rtMin;
        }
        if (null !== $this->blockedQpsAvg) {
            $res['BlockedQpsAvg'] = $this->blockedQpsAvg;
        }
        if (null !== $this->threadAvg) {
            $res['ThreadAvg'] = $this->threadAvg;
        }
        if (null !== $this->blockedQpsP75) {
            $res['BlockedQpsP75'] = $this->blockedQpsP75;
        }
        if (null !== $this->rtP75) {
            $res['RtP75'] = $this->rtP75;
        }
        if (null !== $this->exceptionP99) {
            $res['ExceptionP99'] = $this->exceptionP99;
        }
        if (null !== $this->exceptionP75) {
            $res['ExceptionP75'] = $this->exceptionP75;
        }
        if (null !== $this->successQpsP95) {
            $res['SuccessQpsP95'] = $this->successQpsP95;
        }
        if (null !== $this->rt) {
            $res['Rt'] = $this->rt;
        }
        if (null !== $this->passedQpsP95) {
            $res['PassedQpsP95'] = $this->passedQpsP95;
        }
        if (null !== $this->rtMax) {
            $res['RtMax'] = $this->rtMax;
        }
        if (null !== $this->blockedQpsStd) {
            $res['BlockedQpsStd'] = $this->blockedQpsStd;
        }
        if (null !== $this->blockedQpsMax) {
            $res['BlockedQpsMax'] = $this->blockedQpsMax;
        }
        if (null !== $this->exception) {
            $res['Exception'] = $this->exception;
        }
        if (null !== $this->exceptionAvg) {
            $res['ExceptionAvg'] = $this->exceptionAvg;
        }
        if (null !== $this->passedQpsStd) {
            $res['PassedQpsStd'] = $this->passedQpsStd;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return innerMetrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RtP99'])) {
            $model->rtP99 = $map['RtP99'];
        }
        if (isset($map['SuccessQpsAvg'])) {
            $model->successQpsAvg = $map['SuccessQpsAvg'];
        }
        if (isset($map['PassedQpsP99'])) {
            $model->passedQpsP99 = $map['PassedQpsP99'];
        }
        if (isset($map['RtAvg'])) {
            $model->rtAvg = $map['RtAvg'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['ThreadStd'])) {
            $model->threadStd = $map['ThreadStd'];
        }
        if (isset($map['PassedQpsAvg'])) {
            $model->passedQpsAvg = $map['PassedQpsAvg'];
        }
        if (isset($map['ExceptionP95'])) {
            $model->exceptionP95 = $map['ExceptionP95'];
        }
        if (isset($map['SuccessQpsMax'])) {
            $model->successQpsMax = $map['SuccessQpsMax'];
        }
        if (isset($map['RtP95'])) {
            $model->rtP95 = $map['RtP95'];
        }
        if (isset($map['BlockedQpsMin'])) {
            $model->blockedQpsMin = $map['BlockedQpsMin'];
        }
        if (isset($map['BlockedQps'])) {
            $model->blockedQps = $map['BlockedQps'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['ThreadP95'])) {
            $model->threadP95 = $map['ThreadP95'];
        }
        if (isset($map['RtStd'])) {
            $model->rtStd = $map['RtStd'];
        }
        if (isset($map['PassedQpsMin'])) {
            $model->passedQpsMin = $map['PassedQpsMin'];
        }
        if (isset($map['BlockedQpsP99'])) {
            $model->blockedQpsP99 = $map['BlockedQpsP99'];
        }
        if (isset($map['PassedQpsMax'])) {
            $model->passedQpsMax = $map['PassedQpsMax'];
        }
        if (isset($map['ExceptionMax'])) {
            $model->exceptionMax = $map['ExceptionMax'];
        }
        if (isset($map['SuccessQps'])) {
            $model->successQps = $map['SuccessQps'];
        }
        if (isset($map['SuccessQpsP75'])) {
            $model->successQpsP75 = $map['SuccessQpsP75'];
        }
        if (isset($map['ThreadP75'])) {
            $model->threadP75 = $map['ThreadP75'];
        }
        if (isset($map['SuccessQpsStd'])) {
            $model->successQpsStd = $map['SuccessQpsStd'];
        }
        if (isset($map['ExceptionMin'])) {
            $model->exceptionMin = $map['ExceptionMin'];
        }
        if (isset($map['PassedQpsP75'])) {
            $model->passedQpsP75 = $map['PassedQpsP75'];
        }
        if (isset($map['PassedQps'])) {
            $model->passedQps = $map['PassedQps'];
        }
        if (isset($map['ThreadMax'])) {
            $model->threadMax = $map['ThreadMax'];
        }
        if (isset($map['SuccessQpsP99'])) {
            $model->successQpsP99 = $map['SuccessQpsP99'];
        }
        if (isset($map['SuccessQpsMin'])) {
            $model->successQpsMin = $map['SuccessQpsMin'];
        }
        if (isset($map['ThreadP99'])) {
            $model->threadP99 = $map['ThreadP99'];
        }
        if (isset($map['ExceptionStd'])) {
            $model->exceptionStd = $map['ExceptionStd'];
        }
        if (isset($map['BlockedQpsP95'])) {
            $model->blockedQpsP95 = $map['BlockedQpsP95'];
        }
        if (isset($map['Thread'])) {
            $model->thread = $map['Thread'];
        }
        if (isset($map['ThreadMin'])) {
            $model->threadMin = $map['ThreadMin'];
        }
        if (isset($map['RtMin'])) {
            $model->rtMin = $map['RtMin'];
        }
        if (isset($map['BlockedQpsAvg'])) {
            $model->blockedQpsAvg = $map['BlockedQpsAvg'];
        }
        if (isset($map['ThreadAvg'])) {
            $model->threadAvg = $map['ThreadAvg'];
        }
        if (isset($map['BlockedQpsP75'])) {
            $model->blockedQpsP75 = $map['BlockedQpsP75'];
        }
        if (isset($map['RtP75'])) {
            $model->rtP75 = $map['RtP75'];
        }
        if (isset($map['ExceptionP99'])) {
            $model->exceptionP99 = $map['ExceptionP99'];
        }
        if (isset($map['ExceptionP75'])) {
            $model->exceptionP75 = $map['ExceptionP75'];
        }
        if (isset($map['SuccessQpsP95'])) {
            $model->successQpsP95 = $map['SuccessQpsP95'];
        }
        if (isset($map['Rt'])) {
            $model->rt = $map['Rt'];
        }
        if (isset($map['PassedQpsP95'])) {
            $model->passedQpsP95 = $map['PassedQpsP95'];
        }
        if (isset($map['RtMax'])) {
            $model->rtMax = $map['RtMax'];
        }
        if (isset($map['BlockedQpsStd'])) {
            $model->blockedQpsStd = $map['BlockedQpsStd'];
        }
        if (isset($map['BlockedQpsMax'])) {
            $model->blockedQpsMax = $map['BlockedQpsMax'];
        }
        if (isset($map['Exception'])) {
            $model->exception = $map['Exception'];
        }
        if (isset($map['ExceptionAvg'])) {
            $model->exceptionAvg = $map['ExceptionAvg'];
        }
        if (isset($map['PassedQpsStd'])) {
            $model->passedQpsStd = $map['PassedQpsStd'];
        }

        return $model;
    }
}
