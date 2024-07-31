<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeFirewallTemplateApplyResultsResponseBody;

use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeFirewallTemplateApplyResultsResponseBody\data\instanceApplyResults;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The time when the firewall template was applied to the simple application servers.
     *
     * @example Tue May 14 11:53:07 CST 2024
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The total number of simple application servers to which the firewall template fails to apply.
     *
     * @example 0
     *
     * @var string
     */
    public $failedCount;

    /**
     * @description The ID of the firewall template.
     *
     * @example ft-bcf1a7hrdq717****
     *
     * @var string
     */
    public $firewallTemplateId;

    /**
     * @description The result of applying the firewall template to the simple application servers.
     *
     * @var instanceApplyResults[]
     */
    public $instanceApplyResults;

    /**
     * @description The status of applying the template to all simple application servers. Valid values:
     *
     *   Running: The firewall template is being applied to simple application servers.
     *   Failed: The firewall template is applied to none of simple application servers.
     *   Success: The firewall template is applied to all simple application servers.
     *   PartFailed: The firewall template fails to be applied to some simple application servers.
     *
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the execution to apply the template.
     *
     * @example aft-ikgt0bynitvs3****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
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
    }

    public function toMap()
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
            $res['InstanceApplyResults'] = [];
            if (null !== $this->instanceApplyResults && \is_array($this->instanceApplyResults)) {
                $n = 0;
                foreach ($this->instanceApplyResults as $item) {
                    $res['InstanceApplyResults'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return data
     */
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
                $n                           = 0;
                foreach ($map['InstanceApplyResults'] as $item) {
                    $model->instanceApplyResults[$n++] = null !== $item ? instanceApplyResults::fromMap($item) : $item;
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
