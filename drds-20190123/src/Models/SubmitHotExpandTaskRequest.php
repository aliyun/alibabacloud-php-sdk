<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitHotExpandTaskRequest\extendedMapping;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitHotExpandTaskRequest\instanceDbMapping;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitHotExpandTaskRequest\mapping;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitHotExpandTaskRequest\supperAccountMapping;

class SubmitHotExpandTaskRequest extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var extendedMapping[]
     */
    public $extendedMapping;

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
     * @var string
     */
    public $taskDesc;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'dbName' => 'DbName',
        'drdsInstanceId' => 'DrdsInstanceId',
        'extendedMapping' => 'ExtendedMapping',
        'instanceDbMapping' => 'InstanceDbMapping',
        'mapping' => 'Mapping',
        'supperAccountMapping' => 'SupperAccountMapping',
        'taskDesc' => 'TaskDesc',
        'taskName' => 'TaskName',
    ];

    public function validate()
    {
        if (\is_array($this->extendedMapping)) {
            Model::validateArray($this->extendedMapping);
        }
        if (\is_array($this->instanceDbMapping)) {
            Model::validateArray($this->instanceDbMapping);
        }
        if (\is_array($this->mapping)) {
            Model::validateArray($this->mapping);
        }
        if (\is_array($this->supperAccountMapping)) {
            Model::validateArray($this->supperAccountMapping);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }

        if (null !== $this->extendedMapping) {
            if (\is_array($this->extendedMapping)) {
                $res['ExtendedMapping'] = [];
                $n1 = 0;
                foreach ($this->extendedMapping as $item1) {
                    $res['ExtendedMapping'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceDbMapping) {
            if (\is_array($this->instanceDbMapping)) {
                $res['InstanceDbMapping'] = [];
                $n1 = 0;
                foreach ($this->instanceDbMapping as $item1) {
                    $res['InstanceDbMapping'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mapping) {
            if (\is_array($this->mapping)) {
                $res['Mapping'] = [];
                $n1 = 0;
                foreach ($this->mapping as $item1) {
                    $res['Mapping'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->supperAccountMapping) {
            if (\is_array($this->supperAccountMapping)) {
                $res['SupperAccountMapping'] = [];
                $n1 = 0;
                foreach ($this->supperAccountMapping as $item1) {
                    $res['SupperAccountMapping'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['ExtendedMapping'] as $item1) {
                    $model->extendedMapping[$n1] = extendedMapping::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceDbMapping'])) {
            if (!empty($map['InstanceDbMapping'])) {
                $model->instanceDbMapping = [];
                $n1 = 0;
                foreach ($map['InstanceDbMapping'] as $item1) {
                    $model->instanceDbMapping[$n1] = instanceDbMapping::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Mapping'])) {
            if (!empty($map['Mapping'])) {
                $model->mapping = [];
                $n1 = 0;
                foreach ($map['Mapping'] as $item1) {
                    $model->mapping[$n1] = mapping::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SupperAccountMapping'])) {
            if (!empty($map['SupperAccountMapping'])) {
                $model->supperAccountMapping = [];
                $n1 = 0;
                foreach ($map['SupperAccountMapping'] as $item1) {
                    $model->supperAccountMapping[$n1] = supperAccountMapping::fromMap($item1);
                    ++$n1;
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
