<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class ListUsersRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $department;

    /**
     * @var string
     */
    public $fuzzyUsername;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $preciseUsername;

    /**
     * @var string[]
     */
    public $saseUserIds;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'department' => 'Department',
        'fuzzyUsername' => 'FuzzyUsername',
        'pageSize' => 'PageSize',
        'preciseUsername' => 'PreciseUsername',
        'saseUserIds' => 'SaseUserIds',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->saseUserIds)) {
            Model::validateArray($this->saseUserIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }

        if (null !== $this->fuzzyUsername) {
            $res['FuzzyUsername'] = $this->fuzzyUsername;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->preciseUsername) {
            $res['PreciseUsername'] = $this->preciseUsername;
        }

        if (null !== $this->saseUserIds) {
            if (\is_array($this->saseUserIds)) {
                $res['SaseUserIds'] = [];
                $n1 = 0;
                foreach ($this->saseUserIds as $item1) {
                    $res['SaseUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }

        if (isset($map['FuzzyUsername'])) {
            $model->fuzzyUsername = $map['FuzzyUsername'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PreciseUsername'])) {
            $model->preciseUsername = $map['PreciseUsername'];
        }

        if (isset($map['SaseUserIds'])) {
            if (!empty($map['SaseUserIds'])) {
                $model->saseUserIds = [];
                $n1 = 0;
                foreach ($map['SaseUserIds'] as $item1) {
                    $model->saseUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
