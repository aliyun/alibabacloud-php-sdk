<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody\data\incrSyncComponents\errorDetails;

class incrSyncComponents extends Model
{
    /**
     * @var string
     */
    public $checkpoint;

    /**
     * @var int
     */
    public $checkpointSampleTimestamp;

    /**
     * @var int
     */
    public $delay;

    /**
     * @var errorDetails[]
     */
    public $errorDetails;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModify;

    /**
     * @var string
     */
    public $identity;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $subtopics;

    /**
     * @var int
     */
    public $tps;
    protected $_name = [
        'checkpoint' => 'Checkpoint',
        'checkpointSampleTimestamp' => 'CheckpointSampleTimestamp',
        'delay' => 'Delay',
        'errorDetails' => 'ErrorDetails',
        'gmtCreate' => 'GmtCreate',
        'gmtModify' => 'GmtModify',
        'identity' => 'Identity',
        'ip' => 'Ip',
        'name' => 'Name',
        'region' => 'Region',
        'status' => 'Status',
        'subtopics' => 'Subtopics',
        'tps' => 'Tps',
    ];

    public function validate()
    {
        if (\is_array($this->errorDetails)) {
            Model::validateArray($this->errorDetails);
        }
        if (\is_array($this->subtopics)) {
            Model::validateArray($this->subtopics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->errorDetails)) {
                $res['ErrorDetails'] = [];
                $n1 = 0;
                foreach ($this->errorDetails as $item1) {
                    $res['ErrorDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->subtopics)) {
                $res['Subtopics'] = [];
                $n1 = 0;
                foreach ($this->subtopics as $item1) {
                    $res['Subtopics'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tps) {
            $res['Tps'] = $this->tps;
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
                $n1 = 0;
                foreach ($map['ErrorDetails'] as $item1) {
                    $model->errorDetails[$n1] = errorDetails::fromMap($item1);
                    ++$n1;
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
                $model->subtopics = [];
                $n1 = 0;
                foreach ($map['Subtopics'] as $item1) {
                    $model->subtopics[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Tps'])) {
            $model->tps = $map['Tps'];
        }

        return $model;
    }
}
