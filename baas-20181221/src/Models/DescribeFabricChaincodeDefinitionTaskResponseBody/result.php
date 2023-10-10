<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricChaincodeDefinitionTaskResponseBody;

use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricChaincodeDefinitionTaskResponseBody\result\content;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string[]
     */
    public $approvers;

    /**
     * @example f100
     *
     * @var string
     */
    public $channelName;

    /**
     * @var content
     */
    public $content;

    /**
     * @example 1533025590
     *
     * @var int
     */
    public $createTime;

    /**
     * @example perf9141MSP
     *
     * @var string
     */
    public $creator;

    /**
     * @example description
     *
     * @var string
     */
    public $description;

    /**
     * @example Pending
     *
     * @var string
     */
    public $status;

    /**
     * @example 1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3
     *
     * @var string
     */
    public $taskId;

    /**
     * @example ChaincodeDefinition
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'approvers'   => 'Approvers',
        'channelName' => 'ChannelName',
        'content'     => 'Content',
        'createTime'  => 'CreateTime',
        'creator'     => 'Creator',
        'description' => 'Description',
        'status'      => 'Status',
        'taskId'      => 'TaskId',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->approvers) {
            $res['Approvers'] = $this->approvers;
        }
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }
        if (null !== $this->content) {
            $res['Content'] = null !== $this->content ? $this->content->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Approvers'])) {
            if (!empty($map['Approvers'])) {
                $model->approvers = $map['Approvers'];
            }
        }
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }
        if (isset($map['Content'])) {
            $model->content = content::fromMap($map['Content']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
