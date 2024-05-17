<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ListUsersRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1
     *
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
     * @description This parameter is required.
     *
     * @example 10
     *
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
     * @example Enabled
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'currentPage'     => 'CurrentPage',
        'department'      => 'Department',
        'fuzzyUsername'   => 'FuzzyUsername',
        'pageSize'        => 'PageSize',
        'preciseUsername' => 'PreciseUsername',
        'saseUserIds'     => 'SaseUserIds',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['SaseUserIds'] = $this->saseUserIds;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUsersRequest
     */
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
                $model->saseUserIds = $map['SaseUserIds'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
