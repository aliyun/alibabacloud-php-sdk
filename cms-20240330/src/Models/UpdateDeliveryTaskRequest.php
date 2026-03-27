<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\UpdateDeliveryTaskRequest\sinkList;

class UpdateDeliveryTaskRequest extends Model
{
    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string[]
     */
    public $externalLabels;

    /**
     * @var string[]
     */
    public $labelFilters;

    /**
     * @var string
     */
    public $labelFiltersType;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var sinkList[]
     */
    public $sinkList;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskDescription;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'dataSourceId' => 'dataSourceId',
        'externalLabels' => 'externalLabels',
        'labelFilters' => 'labelFilters',
        'labelFiltersType' => 'labelFiltersType',
        'resourceGroupId' => 'resourceGroupId',
        'sinkList' => 'sinkList',
        'status' => 'status',
        'taskDescription' => 'taskDescription',
        'taskName' => 'taskName',
    ];

    public function validate()
    {
        if (\is_array($this->externalLabels)) {
            Model::validateArray($this->externalLabels);
        }
        if (\is_array($this->labelFilters)) {
            Model::validateArray($this->labelFilters);
        }
        if (\is_array($this->sinkList)) {
            Model::validateArray($this->sinkList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['dataSourceId'] = $this->dataSourceId;
        }

        if (null !== $this->externalLabels) {
            if (\is_array($this->externalLabels)) {
                $res['externalLabels'] = [];
                foreach ($this->externalLabels as $key1 => $value1) {
                    $res['externalLabels'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->labelFilters) {
            if (\is_array($this->labelFilters)) {
                $res['labelFilters'] = [];
                foreach ($this->labelFilters as $key1 => $value1) {
                    $res['labelFilters'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->labelFiltersType) {
            $res['labelFiltersType'] = $this->labelFiltersType;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->sinkList) {
            if (\is_array($this->sinkList)) {
                $res['sinkList'] = [];
                $n1 = 0;
                foreach ($this->sinkList as $item1) {
                    $res['sinkList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->taskDescription) {
            $res['taskDescription'] = $this->taskDescription;
        }

        if (null !== $this->taskName) {
            $res['taskName'] = $this->taskName;
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
        if (isset($map['dataSourceId'])) {
            $model->dataSourceId = $map['dataSourceId'];
        }

        if (isset($map['externalLabels'])) {
            if (!empty($map['externalLabels'])) {
                $model->externalLabels = [];
                foreach ($map['externalLabels'] as $key1 => $value1) {
                    $model->externalLabels[$key1] = $value1;
                }
            }
        }

        if (isset($map['labelFilters'])) {
            if (!empty($map['labelFilters'])) {
                $model->labelFilters = [];
                foreach ($map['labelFilters'] as $key1 => $value1) {
                    $model->labelFilters[$key1] = $value1;
                }
            }
        }

        if (isset($map['labelFiltersType'])) {
            $model->labelFiltersType = $map['labelFiltersType'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['sinkList'])) {
            if (!empty($map['sinkList'])) {
                $model->sinkList = [];
                $n1 = 0;
                foreach ($map['sinkList'] as $item1) {
                    $model->sinkList[$n1] = sinkList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taskDescription'])) {
            $model->taskDescription = $map['taskDescription'];
        }

        if (isset($map['taskName'])) {
            $model->taskName = $map['taskName'];
        }

        return $model;
    }
}
