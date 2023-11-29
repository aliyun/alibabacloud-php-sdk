<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody\data;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody\data\reverseIncrSyncComponents\errorDetails;
use AlibabaCloud\Tea\Model;

class reverseIncrSyncComponents extends Model
{
    /**
     * @example 2023-07-13T09:19:53
     *
     * @var string
     */
    public $checkpoint;

    /**
     * @example 1689250049
     *
     * @var int
     */
    public $checkpointSampleTimestamp;

    /**
     * @example 1
     *
     * @var int
     */
    public $delay;

    /**
     * @var errorDetails[]
     */
    public $errorDetails;

    /**
     * @example 2023-07-13T18:04:36
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2023-07-13T18:04:36
     *
     * @var string
     */
    public $gmtModify;

    /**
     * @example np_4w8****
     *
     * @var string
     */
    public $identity;

    /**
     * @example xxx.xxx.xxx.1
     *
     * @var string
     */
    public $ip;

    /**
     * @example xxx.xxx.xxx.1-9000:connector_v2:np_4w8****9jxc-incr_trans-1-0:0000000277
     *
     * @var string
     */
    public $name;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $subtopics;

    /**
     * @example 1
     *
     * @var int
     */
    public $tps;
    protected $_name = [
        'checkpoint'                => 'Checkpoint',
        'checkpointSampleTimestamp' => 'CheckpointSampleTimestamp',
        'delay'                     => 'Delay',
        'errorDetails'              => 'ErrorDetails',
        'gmtCreate'                 => 'GmtCreate',
        'gmtModify'                 => 'GmtModify',
        'identity'                  => 'Identity',
        'ip'                        => 'Ip',
        'name'                      => 'Name',
        'region'                    => 'Region',
        'status'                    => 'Status',
        'subtopics'                 => 'Subtopics',
        'tps'                       => 'Tps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkpoint) {
            $res['Checkpoint'] = $this->checkpoint;
        }
        if (null !== $this->checkpointSampleTimestamp) {
            $res['CheckpointSampleTimestamp'] = $this->checkpointSampleTimestamp;
        }
        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }
        if (null !== $this->errorDetails) {
            $res['ErrorDetails'] = [];
            if (null !== $this->errorDetails && \is_array($this->errorDetails)) {
                $n = 0;
                foreach ($this->errorDetails as $item) {
                    $res['ErrorDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModify) {
            $res['GmtModify'] = $this->gmtModify;
        }
        if (null !== $this->identity) {
            $res['Identity'] = $this->identity;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subtopics) {
            $res['Subtopics'] = $this->subtopics;
        }
        if (null !== $this->tps) {
            $res['Tps'] = $this->tps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reverseIncrSyncComponents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Checkpoint'])) {
            $model->checkpoint = $map['Checkpoint'];
        }
        if (isset($map['CheckpointSampleTimestamp'])) {
            $model->checkpointSampleTimestamp = $map['CheckpointSampleTimestamp'];
        }
        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }
        if (isset($map['ErrorDetails'])) {
            if (!empty($map['ErrorDetails'])) {
                $model->errorDetails = [];
                $n                   = 0;
                foreach ($map['ErrorDetails'] as $item) {
                    $model->errorDetails[$n++] = null !== $item ? errorDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModify'])) {
            $model->gmtModify = $map['GmtModify'];
        }
        if (isset($map['Identity'])) {
            $model->identity = $map['Identity'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Subtopics'])) {
            if (!empty($map['Subtopics'])) {
                $model->subtopics = $map['Subtopics'];
            }
        }
        if (isset($map['Tps'])) {
            $model->tps = $map['Tps'];
        }

        return $model;
    }
}
