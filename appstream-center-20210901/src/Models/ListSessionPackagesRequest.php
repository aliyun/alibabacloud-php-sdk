<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ListSessionPackagesRequest extends Model
{
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
    public $projectId;
    /**
     * @var string
     */
    public $sessionPackageId;
    /**
     * @var string
     */
    public $sessionPackageName;
    /**
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
        if (\is_array($this->stateList)) {
            Model::validateArray($this->stateList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->stateList)) {
                $res['StateList'] = [];
                $n1               = 0;
                foreach ($this->stateList as $item1) {
                    $res['StateList'][$n1++] = $item1;
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
                $model->stateList = [];
                $n1               = 0;
                foreach ($map['StateList'] as $item1) {
                    $model->stateList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
