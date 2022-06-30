<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Apds\V20220331\Models\CreateMigrationJobRequest;

use AlibabaCloud\Tea\Model;

class migrationJobList extends Model
{
    /**
     * @description 目的
     *
     * @var string
     */
    public $destination;

    /**
     * @description 目的IP
     *
     * @var string
     */
    public $destinationIp;

    /**
     * @description region
     *
     * @var string
     */
    public $destinationRegion;

    /**
     * @description 任务创建时间
     *
     * @var string
     */
    public $jobGmtCreate;

    /**
     * @description 任务最后修改时间
     *
     * @var string
     */
    public $jobGmtModified;

    /**
     * @description 任务名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 来源系统的速度
     *
     * @var string
     */
    public $originalPercent;

    /**
     * @description 来源系统的进度
     *
     * @var string
     */
    public $originalProgress;

    /**
     * @description 来源系统状态
     *
     * @var string
     */
    public $originalStatus;

    /**
     * @description 来源系统的jobID；
     *
     * @var string
     */
    public $outSideId;

    /**
     * @description 扩展字段
     *
     * @var string
     */
    public $properties;

    /**
     * @description 源
     *
     * @var string
     */
    public $source;

    /**
     * @description 源IP
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'destination'       => 'destination',
        'destinationIp'     => 'destinationIp',
        'destinationRegion' => 'destinationRegion',
        'jobGmtCreate'      => 'jobGmtCreate',
        'jobGmtModified'    => 'jobGmtModified',
        'name'              => 'name',
        'originalPercent'   => 'originalPercent',
        'originalProgress'  => 'originalProgress',
        'originalStatus'    => 'originalStatus',
        'outSideId'         => 'outSideId',
        'properties'        => 'properties',
        'source'            => 'source',
        'sourceIp'          => 'sourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destination) {
            $res['destination'] = $this->destination;
        }
        if (null !== $this->destinationIp) {
            $res['destinationIp'] = $this->destinationIp;
        }
        if (null !== $this->destinationRegion) {
            $res['destinationRegion'] = $this->destinationRegion;
        }
        if (null !== $this->jobGmtCreate) {
            $res['jobGmtCreate'] = $this->jobGmtCreate;
        }
        if (null !== $this->jobGmtModified) {
            $res['jobGmtModified'] = $this->jobGmtModified;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->originalPercent) {
            $res['originalPercent'] = $this->originalPercent;
        }
        if (null !== $this->originalProgress) {
            $res['originalProgress'] = $this->originalProgress;
        }
        if (null !== $this->originalStatus) {
            $res['originalStatus'] = $this->originalStatus;
        }
        if (null !== $this->outSideId) {
            $res['outSideId'] = $this->outSideId;
        }
        if (null !== $this->properties) {
            $res['properties'] = $this->properties;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->sourceIp) {
            $res['sourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return migrationJobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['destination'])) {
            $model->destination = $map['destination'];
        }
        if (isset($map['destinationIp'])) {
            $model->destinationIp = $map['destinationIp'];
        }
        if (isset($map['destinationRegion'])) {
            $model->destinationRegion = $map['destinationRegion'];
        }
        if (isset($map['jobGmtCreate'])) {
            $model->jobGmtCreate = $map['jobGmtCreate'];
        }
        if (isset($map['jobGmtModified'])) {
            $model->jobGmtModified = $map['jobGmtModified'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['originalPercent'])) {
            $model->originalPercent = $map['originalPercent'];
        }
        if (isset($map['originalProgress'])) {
            $model->originalProgress = $map['originalProgress'];
        }
        if (isset($map['originalStatus'])) {
            $model->originalStatus = $map['originalStatus'];
        }
        if (isset($map['outSideId'])) {
            $model->outSideId = $map['outSideId'];
        }
        if (isset($map['properties'])) {
            $model->properties = $map['properties'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['sourceIp'])) {
            $model->sourceIp = $map['sourceIp'];
        }

        return $model;
    }
}
