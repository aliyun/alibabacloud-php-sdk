<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class DeleteRepoTriggerRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example cri-xkx6vujuhay0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the image repository.
     *
     * @example crr-xwvi3osiy4ff****
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The ID of the trigger.
     *
     * @example crw-0z4pf81pgz35****
     *
     * @var string
     */
    public $triggerId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'repoId'     => 'RepoId',
        'triggerId'  => 'TriggerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->triggerId) {
            $res['TriggerId'] = $this->triggerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteRepoTriggerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['TriggerId'])) {
            $model->triggerId = $map['TriggerId'];
        }

        return $model;
    }
}
