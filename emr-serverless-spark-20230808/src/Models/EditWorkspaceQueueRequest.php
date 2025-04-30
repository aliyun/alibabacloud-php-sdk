<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\EditWorkspaceQueueRequest\resourceSpec;

class EditWorkspaceQueueRequest extends Model
{
    /**
     * @var string[]
     */
    public $environments;

    /**
     * @var resourceSpec
     */
    public $resourceSpec;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $workspaceQueueName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'environments' => 'environments',
        'resourceSpec' => 'resourceSpec',
        'workspaceId' => 'workspaceId',
        'workspaceQueueName' => 'workspaceQueueName',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        if (\is_array($this->environments)) {
            Model::validateArray($this->environments);
        }
        if (null !== $this->resourceSpec) {
            $this->resourceSpec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->environments) {
            if (\is_array($this->environments)) {
                $res['environments'] = [];
                $n1 = 0;
                foreach ($this->environments as $item1) {
                    $res['environments'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resourceSpec) {
            $res['resourceSpec'] = null !== $this->resourceSpec ? $this->resourceSpec->toArray($noStream) : $this->resourceSpec;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        if (null !== $this->workspaceQueueName) {
            $res['workspaceQueueName'] = $this->workspaceQueueName;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
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
        if (isset($map['environments'])) {
            if (!empty($map['environments'])) {
                $model->environments = [];
                $n1 = 0;
                foreach ($map['environments'] as $item1) {
                    $model->environments[$n1++] = $item1;
                }
            }
        }

        if (isset($map['resourceSpec'])) {
            $model->resourceSpec = resourceSpec::fromMap($map['resourceSpec']);
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        if (isset($map['workspaceQueueName'])) {
            $model->workspaceQueueName = $map['workspaceQueueName'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
