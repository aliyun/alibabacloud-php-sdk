<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListJobsRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListJobsRequest\filter\tag;

class filter extends Model
{
    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string[]
     */
    public $jobIds;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $jobTemplateId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var int
     */
    public $timeCreatedAfter;

    /**
     * @var int
     */
    public $timeCreatedBefore;
    protected $_name = [
        'jobId' => 'JobId',
        'jobIds' => 'JobIds',
        'jobName' => 'JobName',
        'jobTemplateId' => 'JobTemplateId',
        'status' => 'Status',
        'tag' => 'Tag',
        'timeCreatedAfter' => 'TimeCreatedAfter',
        'timeCreatedBefore' => 'TimeCreatedBefore',
    ];

    public function validate()
    {
        if (\is_array($this->jobIds)) {
            Model::validateArray($this->jobIds);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->jobIds) {
            if (\is_array($this->jobIds)) {
                $res['JobIds'] = [];
                $n1 = 0;
                foreach ($this->jobIds as $item1) {
                    $res['JobIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->jobTemplateId) {
            $res['JobTemplateId'] = $this->jobTemplateId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timeCreatedAfter) {
            $res['TimeCreatedAfter'] = $this->timeCreatedAfter;
        }

        if (null !== $this->timeCreatedBefore) {
            $res['TimeCreatedBefore'] = $this->timeCreatedBefore;
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['JobIds'])) {
            if (!empty($map['JobIds'])) {
                $model->jobIds = [];
                $n1 = 0;
                foreach ($map['JobIds'] as $item1) {
                    $model->jobIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['JobTemplateId'])) {
            $model->jobTemplateId = $map['JobTemplateId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TimeCreatedAfter'])) {
            $model->timeCreatedAfter = $map['TimeCreatedAfter'];
        }

        if (isset($map['TimeCreatedBefore'])) {
            $model->timeCreatedBefore = $map['TimeCreatedBefore'];
        }

        return $model;
    }
}
