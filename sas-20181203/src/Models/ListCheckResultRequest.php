<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListCheckResultRequest extends Model
{
    /**
     * @var int[]
     */
    public $checkIds;

    /**
     * @var string
     */
    public $checkKey;

    /**
     * @var string[]
     */
    public $checkTypes;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var bool
     */
    public $customParam;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string[]
     */
    public $operationTypes;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int[]
     */
    public $requirementIds;

    /**
     * @var int
     */
    public $resourceDirectoryAccountId;

    /**
     * @var string[]
     */
    public $riskLevels;

    /**
     * @var string[]
     */
    public $sortTypes;

    /**
     * @var int[]
     */
    public $standardIds;

    /**
     * @var string[]
     */
    public $statuses;

    /**
     * @var string[]
     */
    public $taskSources;

    /**
     * @var string[]
     */
    public $types;

    /**
     * @var string[]
     */
    public $vendors;
    protected $_name = [
        'checkIds' => 'CheckIds',
        'checkKey' => 'CheckKey',
        'checkTypes' => 'CheckTypes',
        'currentPage' => 'CurrentPage',
        'customParam' => 'CustomParam',
        'instanceIds' => 'InstanceIds',
        'instanceTypes' => 'InstanceTypes',
        'lang' => 'Lang',
        'operationTypes' => 'OperationTypes',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'requirementIds' => 'RequirementIds',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
        'riskLevels' => 'RiskLevels',
        'sortTypes' => 'SortTypes',
        'standardIds' => 'StandardIds',
        'statuses' => 'Statuses',
        'taskSources' => 'TaskSources',
        'types' => 'Types',
        'vendors' => 'Vendors',
    ];

    public function validate()
    {
        if (\is_array($this->checkIds)) {
            Model::validateArray($this->checkIds);
        }
        if (\is_array($this->checkTypes)) {
            Model::validateArray($this->checkTypes);
        }
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        if (\is_array($this->instanceTypes)) {
            Model::validateArray($this->instanceTypes);
        }
        if (\is_array($this->operationTypes)) {
            Model::validateArray($this->operationTypes);
        }
        if (\is_array($this->requirementIds)) {
            Model::validateArray($this->requirementIds);
        }
        if (\is_array($this->riskLevels)) {
            Model::validateArray($this->riskLevels);
        }
        if (\is_array($this->sortTypes)) {
            Model::validateArray($this->sortTypes);
        }
        if (\is_array($this->standardIds)) {
            Model::validateArray($this->standardIds);
        }
        if (\is_array($this->statuses)) {
            Model::validateArray($this->statuses);
        }
        if (\is_array($this->taskSources)) {
            Model::validateArray($this->taskSources);
        }
        if (\is_array($this->types)) {
            Model::validateArray($this->types);
        }
        if (\is_array($this->vendors)) {
            Model::validateArray($this->vendors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkIds) {
            if (\is_array($this->checkIds)) {
                $res['CheckIds'] = [];
                $n1 = 0;
                foreach ($this->checkIds as $item1) {
                    $res['CheckIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->checkKey) {
            $res['CheckKey'] = $this->checkKey;
        }

        if (null !== $this->checkTypes) {
            if (\is_array($this->checkTypes)) {
                $res['CheckTypes'] = [];
                $n1 = 0;
                foreach ($this->checkTypes as $item1) {
                    $res['CheckTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->customParam) {
            $res['CustomParam'] = $this->customParam;
        }

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceTypes) {
            if (\is_array($this->instanceTypes)) {
                $res['InstanceTypes'] = [];
                $n1 = 0;
                foreach ($this->instanceTypes as $item1) {
                    $res['InstanceTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->operationTypes) {
            if (\is_array($this->operationTypes)) {
                $res['OperationTypes'] = [];
                $n1 = 0;
                foreach ($this->operationTypes as $item1) {
                    $res['OperationTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requirementIds) {
            if (\is_array($this->requirementIds)) {
                $res['RequirementIds'] = [];
                $n1 = 0;
                foreach ($this->requirementIds as $item1) {
                    $res['RequirementIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
        }

        if (null !== $this->riskLevels) {
            if (\is_array($this->riskLevels)) {
                $res['RiskLevels'] = [];
                $n1 = 0;
                foreach ($this->riskLevels as $item1) {
                    $res['RiskLevels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sortTypes) {
            if (\is_array($this->sortTypes)) {
                $res['SortTypes'] = [];
                $n1 = 0;
                foreach ($this->sortTypes as $item1) {
                    $res['SortTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->statuses) {
            if (\is_array($this->statuses)) {
                $res['Statuses'] = [];
                $n1 = 0;
                foreach ($this->statuses as $item1) {
                    $res['Statuses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskSources) {
            if (\is_array($this->taskSources)) {
                $res['TaskSources'] = [];
                $n1 = 0;
                foreach ($this->taskSources as $item1) {
                    $res['TaskSources'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->types) {
            if (\is_array($this->types)) {
                $res['Types'] = [];
                $n1 = 0;
                foreach ($this->types as $item1) {
                    $res['Types'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CheckIds'])) {
            if (!empty($map['CheckIds'])) {
                $model->checkIds = [];
                $n1 = 0;
                foreach ($map['CheckIds'] as $item1) {
                    $model->checkIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CheckKey'])) {
            $model->checkKey = $map['CheckKey'];
        }

        if (isset($map['CheckTypes'])) {
            if (!empty($map['CheckTypes'])) {
                $model->checkTypes = [];
                $n1 = 0;
                foreach ($map['CheckTypes'] as $item1) {
                    $model->checkTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['CustomParam'])) {
            $model->customParam = $map['CustomParam'];
        }

        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = [];
                $n1 = 0;
                foreach ($map['InstanceTypes'] as $item1) {
                    $model->instanceTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['OperationTypes'])) {
            if (!empty($map['OperationTypes'])) {
                $model->operationTypes = [];
                $n1 = 0;
                foreach ($map['OperationTypes'] as $item1) {
                    $model->operationTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequirementIds'])) {
            if (!empty($map['RequirementIds'])) {
                $model->requirementIds = [];
                $n1 = 0;
                foreach ($map['RequirementIds'] as $item1) {
                    $model->requirementIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }

        if (isset($map['RiskLevels'])) {
            if (!empty($map['RiskLevels'])) {
                $model->riskLevels = [];
                $n1 = 0;
                foreach ($map['RiskLevels'] as $item1) {
                    $model->riskLevels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SortTypes'])) {
            if (!empty($map['SortTypes'])) {
                $model->sortTypes = [];
                $n1 = 0;
                foreach ($map['SortTypes'] as $item1) {
                    $model->sortTypes[$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['Statuses'])) {
            if (!empty($map['Statuses'])) {
                $model->statuses = [];
                $n1 = 0;
                foreach ($map['Statuses'] as $item1) {
                    $model->statuses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskSources'])) {
            if (!empty($map['TaskSources'])) {
                $model->taskSources = [];
                $n1 = 0;
                foreach ($map['TaskSources'] as $item1) {
                    $model->taskSources[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Types'])) {
            if (!empty($map['Types'])) {
                $model->types = [];
                $n1 = 0;
                foreach ($map['Types'] as $item1) {
                    $model->types[$n1] = $item1;
                    ++$n1;
                }
            }
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
