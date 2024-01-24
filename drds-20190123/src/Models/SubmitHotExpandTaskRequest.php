<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitHotExpandTaskRequest\extendedMapping;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitHotExpandTaskRequest\instanceDbMapping;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitHotExpandTaskRequest\mapping;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitHotExpandTaskRequest\supperAccountMapping;
use AlibabaCloud\Tea\Model;

class SubmitHotExpandTaskRequest extends Model
{
    /**
     * @description The name of the database.
     *
     * @example test
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The ID of the instance.
     *
     * @example drdshbga1138****
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The information about the database on which you want to perform hot-spot scale-out.
     *
     * @var extendedMapping[]
     */
    public $extendedMapping;

    /**
     * @description The information about the instance to which the hot-spot database belongs.
     *
     * @var instanceDbMapping[]
     */
    public $instanceDbMapping;

    /**
     * @description The information about the hot-spot database.
     *
     * @var mapping[]
     */
    public $mapping;

    /**
     * @description The information about the privileged account.
     *
     * @var supperAccountMapping[]
     */
    public $supperAccountMapping;

    /**
     * @description The description of the task.
     *
     * @example test
     *
     * @var string
     */
    public $taskDesc;

    /**
     * @description The name of the task.
     *
     * @example test
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'dbName'               => 'DbName',
        'drdsInstanceId'       => 'DrdsInstanceId',
        'extendedMapping'      => 'ExtendedMapping',
        'instanceDbMapping'    => 'InstanceDbMapping',
        'mapping'              => 'Mapping',
        'supperAccountMapping' => 'SupperAccountMapping',
        'taskDesc'             => 'TaskDesc',
        'taskName'             => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->extendedMapping) {
            $res['ExtendedMapping'] = [];
            if (null !== $this->extendedMapping && \is_array($this->extendedMapping)) {
                $n = 0;
                foreach ($this->extendedMapping as $item) {
                    $res['ExtendedMapping'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceDbMapping) {
            $res['InstanceDbMapping'] = [];
            if (null !== $this->instanceDbMapping && \is_array($this->instanceDbMapping)) {
                $n = 0;
                foreach ($this->instanceDbMapping as $item) {
                    $res['InstanceDbMapping'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->mapping) {
            $res['Mapping'] = [];
            if (null !== $this->mapping && \is_array($this->mapping)) {
                $n = 0;
                foreach ($this->mapping as $item) {
                    $res['Mapping'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->supperAccountMapping) {
            $res['SupperAccountMapping'] = [];
            if (null !== $this->supperAccountMapping && \is_array($this->supperAccountMapping)) {
                $n = 0;
                foreach ($this->supperAccountMapping as $item) {
                    $res['SupperAccountMapping'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskDesc) {
            $res['TaskDesc'] = $this->taskDesc;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitHotExpandTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['ExtendedMapping'])) {
            if (!empty($map['ExtendedMapping'])) {
                $model->extendedMapping = [];
                $n                      = 0;
                foreach ($map['ExtendedMapping'] as $item) {
                    $model->extendedMapping[$n++] = null !== $item ? extendedMapping::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceDbMapping'])) {
            if (!empty($map['InstanceDbMapping'])) {
                $model->instanceDbMapping = [];
                $n                        = 0;
                foreach ($map['InstanceDbMapping'] as $item) {
                    $model->instanceDbMapping[$n++] = null !== $item ? instanceDbMapping::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Mapping'])) {
            if (!empty($map['Mapping'])) {
                $model->mapping = [];
                $n              = 0;
                foreach ($map['Mapping'] as $item) {
                    $model->mapping[$n++] = null !== $item ? mapping::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SupperAccountMapping'])) {
            if (!empty($map['SupperAccountMapping'])) {
                $model->supperAccountMapping = [];
                $n                           = 0;
                foreach ($map['SupperAccountMapping'] as $item) {
                    $model->supperAccountMapping[$n++] = null !== $item ? supperAccountMapping::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskDesc'])) {
            $model->taskDesc = $map['TaskDesc'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
