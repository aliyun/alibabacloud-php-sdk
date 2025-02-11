<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeFirewallTemplateApplyResultsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeFirewallTemplateApplyResultsResponseBody\data\instanceApplyResults;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $failedCount;
    /**
     * @var string
     */
    public $firewallTemplateId;
    /**
     * @var instanceApplyResults[]
     */
    public $instanceApplyResults;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $taskId;
    /**
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'createTime'           => 'CreateTime',
        'failedCount'          => 'FailedCount',
        'firewallTemplateId'   => 'FirewallTemplateId',
        'instanceApplyResults' => 'InstanceApplyResults',
        'status'               => 'Status',
        'taskId'               => 'TaskId',
        'totalCount'           => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->instanceApplyResults)) {
            Model::validateArray($this->instanceApplyResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }

        if (null !== $this->firewallTemplateId) {
            $res['FirewallTemplateId'] = $this->firewallTemplateId;
        }

        if (null !== $this->instanceApplyResults) {
            if (\is_array($this->instanceApplyResults)) {
                $res['InstanceApplyResults'] = [];
                $n1                          = 0;
                foreach ($this->instanceApplyResults as $item1) {
                    $res['InstanceApplyResults'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }

        if (isset($map['FirewallTemplateId'])) {
            $model->firewallTemplateId = $map['FirewallTemplateId'];
        }

        if (isset($map['InstanceApplyResults'])) {
            if (!empty($map['InstanceApplyResults'])) {
                $model->instanceApplyResults = [];
                $n1                          = 0;
                foreach ($map['InstanceApplyResults'] as $item1) {
                    $model->instanceApplyResults[$n1++] = instanceApplyResults::fromMap($item1);
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
