<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ChangeCheckConfigRequest\addedCheck;
use AlibabaCloud\SDK\Sas\V20181203\Models\ChangeCheckConfigRequest\configRequirementIds;
use AlibabaCloud\SDK\Sas\V20181203\Models\ChangeCheckConfigRequest\configStandardIds;
use AlibabaCloud\SDK\Sas\V20181203\Models\ChangeCheckConfigRequest\removedCheck;

class ChangeCheckConfigRequest extends Model
{
    /**
     * @var addedCheck[]
     */
    public $addedCheck;

    /**
     * @var configRequirementIds
     */
    public $configRequirementIds;

    /**
     * @var configStandardIds
     */
    public $configStandardIds;

    /**
     * @var string
     */
    public $configure;

    /**
     * @var int[]
     */
    public $cycleDays;

    /**
     * @var bool
     */
    public $enableAddCheck;

    /**
     * @var bool
     */
    public $enableAutoCheck;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var removedCheck[]
     */
    public $removedCheck;

    /**
     * @var int
     */
    public $resourceDirectoryAccountId;

    /**
     * @var int[]
     */
    public $standardIds;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var bool
     */
    public $systemConfig;

    /**
     * @var string[]
     */
    public $vendors;
    protected $_name = [
        'addedCheck' => 'AddedCheck',
        'configRequirementIds' => 'ConfigRequirementIds',
        'configStandardIds' => 'ConfigStandardIds',
        'configure' => 'Configure',
        'cycleDays' => 'CycleDays',
        'enableAddCheck' => 'EnableAddCheck',
        'enableAutoCheck' => 'EnableAutoCheck',
        'endTime' => 'EndTime',
        'regionId' => 'RegionId',
        'removedCheck' => 'RemovedCheck',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'standardIds' => 'StandardIds',
        'startTime' => 'StartTime',
        'systemConfig' => 'SystemConfig',
        'vendors' => 'Vendors',
    ];

    public function validate()
    {
        if (\is_array($this->addedCheck)) {
            Model::validateArray($this->addedCheck);
        }
        if (null !== $this->configRequirementIds) {
            $this->configRequirementIds->validate();
        }
        if (null !== $this->configStandardIds) {
            $this->configStandardIds->validate();
        }
        if (\is_array($this->cycleDays)) {
            Model::validateArray($this->cycleDays);
        }
        if (\is_array($this->removedCheck)) {
            Model::validateArray($this->removedCheck);
        }
        if (\is_array($this->standardIds)) {
            Model::validateArray($this->standardIds);
        }
        if (\is_array($this->vendors)) {
            Model::validateArray($this->vendors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addedCheck) {
            if (\is_array($this->addedCheck)) {
                $res['AddedCheck'] = [];
                $n1 = 0;
                foreach ($this->addedCheck as $item1) {
                    $res['AddedCheck'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->configRequirementIds) {
            $res['ConfigRequirementIds'] = null !== $this->configRequirementIds ? $this->configRequirementIds->toArray($noStream) : $this->configRequirementIds;
        }

        if (null !== $this->configStandardIds) {
            $res['ConfigStandardIds'] = null !== $this->configStandardIds ? $this->configStandardIds->toArray($noStream) : $this->configStandardIds;
        }

        if (null !== $this->configure) {
            $res['Configure'] = $this->configure;
        }

        if (null !== $this->cycleDays) {
            if (\is_array($this->cycleDays)) {
                $res['CycleDays'] = [];
                $n1 = 0;
                foreach ($this->cycleDays as $item1) {
                    $res['CycleDays'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enableAddCheck) {
            $res['EnableAddCheck'] = $this->enableAddCheck;
        }

        if (null !== $this->enableAutoCheck) {
            $res['EnableAutoCheck'] = $this->enableAutoCheck;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->removedCheck) {
            if (\is_array($this->removedCheck)) {
                $res['RemovedCheck'] = [];
                $n1 = 0;
                foreach ($this->removedCheck as $item1) {
                    $res['RemovedCheck'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
        }

        if (null !== $this->standardIds) {
            if (\is_array($this->standardIds)) {
                $res['StandardIds'] = [];
                $n1 = 0;
                foreach ($this->standardIds as $item1) {
                    $res['StandardIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->systemConfig) {
            $res['SystemConfig'] = $this->systemConfig;
        }

        if (null !== $this->vendors) {
            if (\is_array($this->vendors)) {
                $res['Vendors'] = [];
                $n1 = 0;
                foreach ($this->vendors as $item1) {
                    $res['Vendors'][$n1] = $item1;
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
        if (isset($map['AddedCheck'])) {
            if (!empty($map['AddedCheck'])) {
                $model->addedCheck = [];
                $n1 = 0;
                foreach ($map['AddedCheck'] as $item1) {
                    $model->addedCheck[$n1] = addedCheck::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ConfigRequirementIds'])) {
            $model->configRequirementIds = configRequirementIds::fromMap($map['ConfigRequirementIds']);
        }

        if (isset($map['ConfigStandardIds'])) {
            $model->configStandardIds = configStandardIds::fromMap($map['ConfigStandardIds']);
        }

        if (isset($map['Configure'])) {
            $model->configure = $map['Configure'];
        }

        if (isset($map['CycleDays'])) {
            if (!empty($map['CycleDays'])) {
                $model->cycleDays = [];
                $n1 = 0;
                foreach ($map['CycleDays'] as $item1) {
                    $model->cycleDays[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EnableAddCheck'])) {
            $model->enableAddCheck = $map['EnableAddCheck'];
        }

        if (isset($map['EnableAutoCheck'])) {
            $model->enableAutoCheck = $map['EnableAutoCheck'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RemovedCheck'])) {
            if (!empty($map['RemovedCheck'])) {
                $model->removedCheck = [];
                $n1 = 0;
                foreach ($map['RemovedCheck'] as $item1) {
                    $model->removedCheck[$n1] = removedCheck::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }

        if (isset($map['StandardIds'])) {
            if (!empty($map['StandardIds'])) {
                $model->standardIds = [];
                $n1 = 0;
                foreach ($map['StandardIds'] as $item1) {
                    $model->standardIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['SystemConfig'])) {
            $model->systemConfig = $map['SystemConfig'];
        }

        if (isset($map['Vendors'])) {
            if (!empty($map['Vendors'])) {
                $model->vendors = [];
                $n1 = 0;
                foreach ($map['Vendors'] as $item1) {
                    $model->vendors[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
