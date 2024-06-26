<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class UpdateGovernanceTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $channelId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $organizationId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $taskAction;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'channelId'      => 'ChannelId',
        'organizationId' => 'OrganizationId',
        'taskAction'     => 'TaskAction',
        'taskId'         => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->taskAction) {
            $res['TaskAction'] = $this->taskAction;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGovernanceTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
