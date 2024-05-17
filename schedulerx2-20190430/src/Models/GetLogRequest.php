<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Tea\Model;

class GetLogRequest extends Model
{
    /**
     * @description The time when the job stops running. Specify a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1675739484000
     *
     * @var int
     */
    public $endTimestamp;

    /**
     * @description The application group ID. You can obtain the application group ID on the Application Management page in the SchedulerX console.
     *
     * This parameter is required.
     * @example testSchedulerx.defaultGroup
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The job ID.
     *
     * @example 123
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The job instance ID.
     *
     * @example 123456
     *
     * @var string
     */
    public $jobInstanceId;

    /**
     * @description The keyword.
     *
     * @example ERROR
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The number of rows to return. The maximum number is 200.
     *
     * @example 50
     *
     * @var int
     */
    public $line;

    /**
     * @description The namespace ID. You can obtain the namespace ID on the Namespace page in the SchedulerX console.
     *
     * This parameter is required.
     * @example adcfc35d-e2fe-4fe9-bbaa-20e90ffc****
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The source of the namespace. This parameter is required only for a special third party.
     *
     * @example schedulerx
     *
     * @var string
     */
    public $namespaceSource;

    /**
     * @description The number of offset rows. This parameter can be used for a paged query.
     *
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to reverse the order. By default, the order is reversed.
     *
     * @example true
     *
     * @var bool
     */
    public $reverse;

    /**
     * @description The time when the job starts to run. Specify a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1675739364000
     *
     * @var int
     */
    public $startTimestamp;
    protected $_name = [
        'endTimestamp'    => 'EndTimestamp',
        'groupId'         => 'GroupId',
        'jobId'           => 'JobId',
        'jobInstanceId'   => 'JobInstanceId',
        'keyword'         => 'Keyword',
        'line'            => 'Line',
        'namespace'       => 'Namespace',
        'namespaceSource' => 'NamespaceSource',
        'offset'          => 'Offset',
        'regionId'        => 'RegionId',
        'reverse'         => 'Reverse',
        'startTimestamp'  => 'StartTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobInstanceId) {
            $res['JobInstanceId'] = $this->jobInstanceId;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->namespaceSource) {
            $res['NamespaceSource'] = $this->namespaceSource;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->reverse) {
            $res['Reverse'] = $this->reverse;
        }
        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobInstanceId'])) {
            $model->jobInstanceId = $map['JobInstanceId'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NamespaceSource'])) {
            $model->namespaceSource = $map['NamespaceSource'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Reverse'])) {
            $model->reverse = $map['Reverse'];
        }
        if (isset($map['StartTimestamp'])) {
            $model->startTimestamp = $map['StartTimestamp'];
        }

        return $model;
    }
}
