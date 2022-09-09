<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetTaskContextResponseBody\task;

use AlibabaCloud\Tea\Model;

class jobConfig extends Model
{
    /**
     * @var bool
     */
    public $isDestroy;

    /**
     * @var string
     */
    public $jobModuleVersion;

    /**
     * @var string
     */
    public $resourcesChanged;
    protected $_name = [
        'isDestroy'        => 'isDestroy',
        'jobModuleVersion' => 'jobModuleVersion',
        'resourcesChanged' => 'resourcesChanged',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isDestroy) {
            $res['isDestroy'] = $this->isDestroy;
        }
        if (null !== $this->jobModuleVersion) {
            $res['jobModuleVersion'] = $this->jobModuleVersion;
        }
        if (null !== $this->resourcesChanged) {
            $res['resourcesChanged'] = $this->resourcesChanged;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['isDestroy'])) {
            $model->isDestroy = $map['isDestroy'];
        }
        if (isset($map['jobModuleVersion'])) {
            $model->jobModuleVersion = $map['jobModuleVersion'];
        }
        if (isset($map['resourcesChanged'])) {
            $model->resourcesChanged = $map['resourcesChanged'];
        }

        return $model;
    }
}
