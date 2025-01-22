<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ListAlertRulesRequest extends Model
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $owner;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $receiver;
    /**
     * @var int[]
     */
    public $taskIds;
    /**
     * @var string[]
     */
    public $types;
    protected $_name = [
        'name'       => 'Name',
        'owner'      => 'Owner',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'receiver'   => 'Receiver',
        'taskIds'    => 'TaskIds',
        'types'      => 'Types',
    ];

    public function validate()
    {
        if (\is_array($this->taskIds)) {
            Model::validateArray($this->taskIds);
        }
        if (\is_array($this->types)) {
            Model::validateArray($this->types);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->receiver) {
            $res['Receiver'] = $this->receiver;
        }

        if (null !== $this->taskIds) {
            if (\is_array($this->taskIds)) {
                $res['TaskIds'] = [];
                $n1             = 0;
                foreach ($this->taskIds as $item1) {
                    $res['TaskIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->types) {
            if (\is_array($this->types)) {
                $res['Types'] = [];
                $n1           = 0;
                foreach ($this->types as $item1) {
                    $res['Types'][$n1++] = $item1;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Receiver'])) {
            $model->receiver = $map['Receiver'];
        }

        if (isset($map['TaskIds'])) {
            if (!empty($map['TaskIds'])) {
                $model->taskIds = [];
                $n1             = 0;
                foreach ($map['TaskIds'] as $item1) {
                    $model->taskIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Types'])) {
            if (!empty($map['Types'])) {
                $model->types = [];
                $n1           = 0;
                foreach ($map['Types'] as $item1) {
                    $model->types[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
