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
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskDesc;

    /**
     * @var instanceDbMapping[]
     */
    public $instanceDbMapping;

    /**
     * @var mapping[]
     */
    public $mapping;

    /**
     * @var supperAccountMapping[]
     */
    public $supperAccountMapping;

    /**
     * @var extendedMapping[]
     */
    public $extendedMapping;
    protected $_name = [
        'drdsInstanceId'       => 'DrdsInstanceId',
        'dbName'               => 'DbName',
        'taskName'             => 'TaskName',
        'taskDesc'             => 'TaskDesc',
        'instanceDbMapping'    => 'InstanceDbMapping',
        'mapping'              => 'Mapping',
        'supperAccountMapping' => 'SupperAccountMapping',
        'extendedMapping'      => 'ExtendedMapping',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskDesc) {
            $res['TaskDesc'] = $this->taskDesc;
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
        if (null !== $this->extendedMapping) {
            $res['ExtendedMapping'] = [];
            if (null !== $this->extendedMapping && \is_array($this->extendedMapping)) {
                $n = 0;
                foreach ($this->extendedMapping as $item) {
                    $res['ExtendedMapping'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskDesc'])) {
            $model->taskDesc = $map['TaskDesc'];
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
        if (isset($map['ExtendedMapping'])) {
            if (!empty($map['ExtendedMapping'])) {
                $model->extendedMapping = [];
                $n                      = 0;
                foreach ($map['ExtendedMapping'] as $item) {
                    $model->extendedMapping[$n++] = null !== $item ? extendedMapping::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
