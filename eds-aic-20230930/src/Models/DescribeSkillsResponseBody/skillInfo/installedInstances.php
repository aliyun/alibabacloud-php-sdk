<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeSkillsResponseBody\skillInfo;

use AlibabaCloud\Dara\Model;

class installedInstances extends Model
{
    /**
     * @var string
     */
    public $installStatus;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'installStatus' => 'InstallStatus',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->installStatus) {
            $res['InstallStatus'] = $this->installStatus;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['InstallStatus'])) {
            $model->installStatus = $map['InstallStatus'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
