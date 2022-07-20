<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\DescribeLivePubListResponseBody;

use AlibabaCloud\Tea\Model;

class pubInfoList extends Model
{
    /**
     * @var string
     */
    public $area;

    /**
     * @var string
     */
    public $cpuUsageRate;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $endTs;

    /**
     * @var string
     */
    public $fps;

    /**
     * @var string
     */
    public $kbps;

    /**
     * @var string
     */
    public $pubHeapUpDuration;

    /**
     * @var string
     */
    public $pubMachineType;

    /**
     * @var string
     */
    public $secondPlayRate;

    /**
     * @var string
     */
    public $startTs;

    /**
     * @var string
     */
    public $streamName;
    protected $_name = [
        'area'              => 'Area',
        'cpuUsageRate'      => 'CpuUsageRate',
        'domain'            => 'Domain',
        'endTs'             => 'EndTs',
        'fps'               => 'Fps',
        'kbps'              => 'Kbps',
        'pubHeapUpDuration' => 'PubHeapUpDuration',
        'pubMachineType'    => 'PubMachineType',
        'secondPlayRate'    => 'SecondPlayRate',
        'startTs'           => 'StartTs',
        'streamName'        => 'StreamName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->cpuUsageRate) {
            $res['CpuUsageRate'] = $this->cpuUsageRate;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->endTs) {
            $res['EndTs'] = $this->endTs;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->kbps) {
            $res['Kbps'] = $this->kbps;
        }
        if (null !== $this->pubHeapUpDuration) {
            $res['PubHeapUpDuration'] = $this->pubHeapUpDuration;
        }
        if (null !== $this->pubMachineType) {
            $res['PubMachineType'] = $this->pubMachineType;
        }
        if (null !== $this->secondPlayRate) {
            $res['SecondPlayRate'] = $this->secondPlayRate;
        }
        if (null !== $this->startTs) {
            $res['StartTs'] = $this->startTs;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pubInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['CpuUsageRate'])) {
            $model->cpuUsageRate = $map['CpuUsageRate'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['EndTs'])) {
            $model->endTs = $map['EndTs'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['Kbps'])) {
            $model->kbps = $map['Kbps'];
        }
        if (isset($map['PubHeapUpDuration'])) {
            $model->pubHeapUpDuration = $map['PubHeapUpDuration'];
        }
        if (isset($map['PubMachineType'])) {
            $model->pubMachineType = $map['PubMachineType'];
        }
        if (isset($map['SecondPlayRate'])) {
            $model->secondPlayRate = $map['SecondPlayRate'];
        }
        if (isset($map['StartTs'])) {
            $model->startTs = $map['StartTs'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
