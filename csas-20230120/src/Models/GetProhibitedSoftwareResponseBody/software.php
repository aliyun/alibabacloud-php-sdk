<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\GetProhibitedSoftwareResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetProhibitedSoftwareResponseBody\software\linuxProcesses;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetProhibitedSoftwareResponseBody\software\macOSProcesses;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetProhibitedSoftwareResponseBody\software\windowsProcesses;

class software extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var linuxProcesses[]
     */
    public $linuxProcesses;

    /**
     * @var macOSProcesses[]
     */
    public $macOSProcesses;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $policyIds;

    /**
     * @var string
     */
    public $softwareId;

    /**
     * @var string[]
     */
    public $tagIds;

    /**
     * @var windowsProcesses[]
     */
    public $windowsProcesses;
    protected $_name = [
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'isDefault' => 'IsDefault',
        'linuxProcesses' => 'LinuxProcesses',
        'macOSProcesses' => 'MacOSProcesses',
        'name' => 'Name',
        'policyIds' => 'PolicyIds',
        'softwareId' => 'SoftwareId',
        'tagIds' => 'TagIds',
        'windowsProcesses' => 'WindowsProcesses',
    ];

    public function validate()
    {
        if (\is_array($this->linuxProcesses)) {
            Model::validateArray($this->linuxProcesses);
        }
        if (\is_array($this->macOSProcesses)) {
            Model::validateArray($this->macOSProcesses);
        }
        if (\is_array($this->policyIds)) {
            Model::validateArray($this->policyIds);
        }
        if (\is_array($this->tagIds)) {
            Model::validateArray($this->tagIds);
        }
        if (\is_array($this->windowsProcesses)) {
            Model::validateArray($this->windowsProcesses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->linuxProcesses) {
            if (\is_array($this->linuxProcesses)) {
                $res['LinuxProcesses'] = [];
                $n1 = 0;
                foreach ($this->linuxProcesses as $item1) {
                    $res['LinuxProcesses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->macOSProcesses) {
            if (\is_array($this->macOSProcesses)) {
                $res['MacOSProcesses'] = [];
                $n1 = 0;
                foreach ($this->macOSProcesses as $item1) {
                    $res['MacOSProcesses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->policyIds) {
            if (\is_array($this->policyIds)) {
                $res['PolicyIds'] = [];
                $n1 = 0;
                foreach ($this->policyIds as $item1) {
                    $res['PolicyIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->softwareId) {
            $res['SoftwareId'] = $this->softwareId;
        }

        if (null !== $this->tagIds) {
            if (\is_array($this->tagIds)) {
                $res['TagIds'] = [];
                $n1 = 0;
                foreach ($this->tagIds as $item1) {
                    $res['TagIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->windowsProcesses) {
            if (\is_array($this->windowsProcesses)) {
                $res['WindowsProcesses'] = [];
                $n1 = 0;
                foreach ($this->windowsProcesses as $item1) {
                    $res['WindowsProcesses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['LinuxProcesses'])) {
            if (!empty($map['LinuxProcesses'])) {
                $model->linuxProcesses = [];
                $n1 = 0;
                foreach ($map['LinuxProcesses'] as $item1) {
                    $model->linuxProcesses[$n1] = linuxProcesses::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MacOSProcesses'])) {
            if (!empty($map['MacOSProcesses'])) {
                $model->macOSProcesses = [];
                $n1 = 0;
                foreach ($map['MacOSProcesses'] as $item1) {
                    $model->macOSProcesses[$n1] = macOSProcesses::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PolicyIds'])) {
            if (!empty($map['PolicyIds'])) {
                $model->policyIds = [];
                $n1 = 0;
                foreach ($map['PolicyIds'] as $item1) {
                    $model->policyIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SoftwareId'])) {
            $model->softwareId = $map['SoftwareId'];
        }

        if (isset($map['TagIds'])) {
            if (!empty($map['TagIds'])) {
                $model->tagIds = [];
                $n1 = 0;
                foreach ($map['TagIds'] as $item1) {
                    $model->tagIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WindowsProcesses'])) {
            if (!empty($map['WindowsProcesses'])) {
                $model->windowsProcesses = [];
                $n1 = 0;
                foreach ($map['WindowsProcesses'] as $item1) {
                    $model->windowsProcesses[$n1] = windowsProcesses::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
