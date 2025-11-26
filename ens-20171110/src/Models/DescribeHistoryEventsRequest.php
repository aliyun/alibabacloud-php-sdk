<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeHistoryEventsRequest extends Model
{
    /**
     * @var string[]
     */
    public $eventLevels;

    /**
     * @var string[]
     */
    public $eventStatus;

    /**
     * @var string[]
     */
    public $eventTypes;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $resourceIds;
    protected $_name = [
        'eventLevels' => 'EventLevels',
        'eventStatus' => 'EventStatus',
        'eventTypes' => 'EventTypes',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'resourceIds' => 'ResourceIds',
    ];

    public function validate()
    {
        if (\is_array($this->eventLevels)) {
            Model::validateArray($this->eventLevels);
        }
        if (\is_array($this->eventStatus)) {
            Model::validateArray($this->eventStatus);
        }
        if (\is_array($this->eventTypes)) {
            Model::validateArray($this->eventTypes);
        }
        if (\is_array($this->resourceIds)) {
            Model::validateArray($this->resourceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventLevels) {
            if (\is_array($this->eventLevels)) {
                $res['EventLevels'] = [];
                $n1 = 0;
                foreach ($this->eventLevels as $item1) {
                    $res['EventLevels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->eventStatus) {
            if (\is_array($this->eventStatus)) {
                $res['EventStatus'] = [];
                $n1 = 0;
                foreach ($this->eventStatus as $item1) {
                    $res['EventStatus'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->eventTypes) {
            if (\is_array($this->eventTypes)) {
                $res['EventTypes'] = [];
                $n1 = 0;
                foreach ($this->eventTypes as $item1) {
                    $res['EventTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->resourceIds) {
            if (\is_array($this->resourceIds)) {
                $res['ResourceIds'] = [];
                $n1 = 0;
                foreach ($this->resourceIds as $item1) {
                    $res['ResourceIds'][$n1] = $item1;
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
        if (isset($map['EventLevels'])) {
            if (!empty($map['EventLevels'])) {
                $model->eventLevels = [];
                $n1 = 0;
                foreach ($map['EventLevels'] as $item1) {
                    $model->eventLevels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EventStatus'])) {
            if (!empty($map['EventStatus'])) {
                $model->eventStatus = [];
                $n1 = 0;
                foreach ($map['EventStatus'] as $item1) {
                    $model->eventStatus[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EventTypes'])) {
            if (!empty($map['EventTypes'])) {
                $model->eventTypes = [];
                $n1 = 0;
                foreach ($map['EventTypes'] as $item1) {
                    $model->eventTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ResourceIds'])) {
            if (!empty($map['ResourceIds'])) {
                $model->resourceIds = [];
                $n1 = 0;
                foreach ($map['ResourceIds'] as $item1) {
                    $model->resourceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
