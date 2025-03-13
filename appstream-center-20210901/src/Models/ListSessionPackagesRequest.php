<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class ListSessionPackagesRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example p-xxxxxxxxxxxx
     *
     * @var string
     */
    public $projectId;

    /**
     * @example tp-xxxxxxxx
     *
     * @var string
     */
    public $sessionPackageId;

    /**
     * @var string
     */
    public $sessionPackageName;

    /**
     * @example ASC
     *
     * @var string
     */
    public $sortType;

    /**
     * @var int[]
     */
    public $stateList;
    protected $_name = [
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'projectId'          => 'ProjectId',
        'sessionPackageId'   => 'SessionPackageId',
        'sessionPackageName' => 'SessionPackageName',
        'sortType'           => 'SortType',
        'stateList'          => 'StateList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->sessionPackageId) {
            $res['SessionPackageId'] = $this->sessionPackageId;
        }
        if (null !== $this->sessionPackageName) {
            $res['SessionPackageName'] = $this->sessionPackageName;
        }
        if (null !== $this->sortType) {
            $res['SortType'] = $this->sortType;
        }
        if (null !== $this->stateList) {
            $res['StateList'] = $this->stateList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSessionPackagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SessionPackageId'])) {
            $model->sessionPackageId = $map['SessionPackageId'];
        }
        if (isset($map['SessionPackageName'])) {
            $model->sessionPackageName = $map['SessionPackageName'];
        }
        if (isset($map['SortType'])) {
            $model->sortType = $map['SortType'];
        }
        if (isset($map['StateList'])) {
            if (!empty($map['StateList'])) {
                $model->stateList = $map['StateList'];
            }
        }

        return $model;
    }
}
