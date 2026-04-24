<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ListImagesRequest extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $official;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int[]
     */
    public $projectIds;

    /**
     * @var string[]
     */
    public $providerTypes;

    /**
     * @var bool
     */
    public $searchAll;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string[]
     */
    public $stages;

    /**
     * @var string[]
     */
    public $statuses;

    /**
     * @var string[]
     */
    public $supportedModules;

    /**
     * @var string[]
     */
    public $supportedTaskTypes;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'name' => 'Name',
        'official' => 'Official',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'projectIds' => 'ProjectIds',
        'providerTypes' => 'ProviderTypes',
        'searchAll' => 'SearchAll',
        'sortBy' => 'SortBy',
        'stages' => 'Stages',
        'statuses' => 'Statuses',
        'supportedModules' => 'SupportedModules',
        'supportedTaskTypes' => 'SupportedTaskTypes',
    ];

    public function validate()
    {
        if (\is_array($this->projectIds)) {
            Model::validateArray($this->projectIds);
        }
        if (\is_array($this->providerTypes)) {
            Model::validateArray($this->providerTypes);
        }
        if (\is_array($this->stages)) {
            Model::validateArray($this->stages);
        }
        if (\is_array($this->statuses)) {
            Model::validateArray($this->statuses);
        }
        if (\is_array($this->supportedModules)) {
            Model::validateArray($this->supportedModules);
        }
        if (\is_array($this->supportedTaskTypes)) {
            Model::validateArray($this->supportedTaskTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->official) {
            $res['Official'] = $this->official;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->projectIds) {
            if (\is_array($this->projectIds)) {
                $res['ProjectIds'] = [];
                $n1 = 0;
                foreach ($this->projectIds as $item1) {
                    $res['ProjectIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->providerTypes) {
            if (\is_array($this->providerTypes)) {
                $res['ProviderTypes'] = [];
                $n1 = 0;
                foreach ($this->providerTypes as $item1) {
                    $res['ProviderTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->searchAll) {
            $res['SearchAll'] = $this->searchAll;
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        if (null !== $this->stages) {
            if (\is_array($this->stages)) {
                $res['Stages'] = [];
                $n1 = 0;
                foreach ($this->stages as $item1) {
                    $res['Stages'][$n1] = $item1;
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

        if (null !== $this->supportedModules) {
            if (\is_array($this->supportedModules)) {
                $res['SupportedModules'] = [];
                $n1 = 0;
                foreach ($this->supportedModules as $item1) {
                    $res['SupportedModules'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->supportedTaskTypes) {
            if (\is_array($this->supportedTaskTypes)) {
                $res['SupportedTaskTypes'] = [];
                $n1 = 0;
                foreach ($this->supportedTaskTypes as $item1) {
                    $res['SupportedTaskTypes'][$n1] = $item1;
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
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Official'])) {
            $model->official = $map['Official'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProjectIds'])) {
            if (!empty($map['ProjectIds'])) {
                $model->projectIds = [];
                $n1 = 0;
                foreach ($map['ProjectIds'] as $item1) {
                    $model->projectIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProviderTypes'])) {
            if (!empty($map['ProviderTypes'])) {
                $model->providerTypes = [];
                $n1 = 0;
                foreach ($map['ProviderTypes'] as $item1) {
                    $model->providerTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SearchAll'])) {
            $model->searchAll = $map['SearchAll'];
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        if (isset($map['Stages'])) {
            if (!empty($map['Stages'])) {
                $model->stages = [];
                $n1 = 0;
                foreach ($map['Stages'] as $item1) {
                    $model->stages[$n1] = $item1;
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

        if (isset($map['SupportedModules'])) {
            if (!empty($map['SupportedModules'])) {
                $model->supportedModules = [];
                $n1 = 0;
                foreach ($map['SupportedModules'] as $item1) {
                    $model->supportedModules[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SupportedTaskTypes'])) {
            if (!empty($map['SupportedTaskTypes'])) {
                $model->supportedTaskTypes = [];
                $n1 = 0;
                foreach ($map['SupportedTaskTypes'] as $item1) {
                    $model->supportedTaskTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
