<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePostpayBillResponseBody;

use AlibabaCloud\Dara\Model;

class billList extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $internetInstanceCnt;

    /**
     * @var float
     */
    public $internetTraffic;

    /**
     * @var int
     */
    public $isDerated;

    /**
     * @var int
     */
    public $logStorage;

    /**
     * @var int
     */
    public $natInstanceCnt;

    /**
     * @var float
     */
    public $natTraffic;

    /**
     * @var int
     */
    public $sdl;

    /**
     * @var float
     */
    public $sdlTraffic;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $threatIntelligence;

    /**
     * @var int
     */
    public $vpcInstanceCnt;

    /**
     * @var float
     */
    public $vpcTraffic;
    protected $_name = [
        'endTime' => 'EndTime',
        'internetInstanceCnt' => 'InternetInstanceCnt',
        'internetTraffic' => 'InternetTraffic',
        'isDerated' => 'IsDerated',
        'logStorage' => 'LogStorage',
        'natInstanceCnt' => 'NatInstanceCnt',
        'natTraffic' => 'NatTraffic',
        'sdl' => 'Sdl',
        'sdlTraffic' => 'SdlTraffic',
        'startTime' => 'StartTime',
        'threatIntelligence' => 'ThreatIntelligence',
        'vpcInstanceCnt' => 'VpcInstanceCnt',
        'vpcTraffic' => 'VpcTraffic',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->internetInstanceCnt) {
            $res['InternetInstanceCnt'] = $this->internetInstanceCnt;
        }

        if (null !== $this->internetTraffic) {
            $res['InternetTraffic'] = $this->internetTraffic;
        }

        if (null !== $this->isDerated) {
            $res['IsDerated'] = $this->isDerated;
        }

        if (null !== $this->logStorage) {
            $res['LogStorage'] = $this->logStorage;
        }

        if (null !== $this->natInstanceCnt) {
            $res['NatInstanceCnt'] = $this->natInstanceCnt;
        }

        if (null !== $this->natTraffic) {
            $res['NatTraffic'] = $this->natTraffic;
        }

        if (null !== $this->sdl) {
            $res['Sdl'] = $this->sdl;
        }

        if (null !== $this->sdlTraffic) {
            $res['SdlTraffic'] = $this->sdlTraffic;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->threatIntelligence) {
            $res['ThreatIntelligence'] = $this->threatIntelligence;
        }

        if (null !== $this->vpcInstanceCnt) {
            $res['VpcInstanceCnt'] = $this->vpcInstanceCnt;
        }

        if (null !== $this->vpcTraffic) {
            $res['VpcTraffic'] = $this->vpcTraffic;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InternetInstanceCnt'])) {
            $model->internetInstanceCnt = $map['InternetInstanceCnt'];
        }

        if (isset($map['InternetTraffic'])) {
            $model->internetTraffic = $map['InternetTraffic'];
        }

        if (isset($map['IsDerated'])) {
            $model->isDerated = $map['IsDerated'];
        }

        if (isset($map['LogStorage'])) {
            $model->logStorage = $map['LogStorage'];
        }

        if (isset($map['NatInstanceCnt'])) {
            $model->natInstanceCnt = $map['NatInstanceCnt'];
        }

        if (isset($map['NatTraffic'])) {
            $model->natTraffic = $map['NatTraffic'];
        }

        if (isset($map['Sdl'])) {
            $model->sdl = $map['Sdl'];
        }

        if (isset($map['SdlTraffic'])) {
            $model->sdlTraffic = $map['SdlTraffic'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['ThreatIntelligence'])) {
            $model->threatIntelligence = $map['ThreatIntelligence'];
        }

        if (isset($map['VpcInstanceCnt'])) {
            $model->vpcInstanceCnt = $map['VpcInstanceCnt'];
        }

        if (isset($map['VpcTraffic'])) {
            $model->vpcTraffic = $map['VpcTraffic'];
        }

        return $model;
    }
}
