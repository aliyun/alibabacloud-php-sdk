<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Apds\V20220331\Models;

use AlibabaCloud\Tea\Model;

class ListSurveyJobDownLoadJobsRequest extends Model
{
    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $sortCol;

    /**
     * @var string
     */
    public $sortType;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'pageNum'  => 'pageNum',
        'pageSize' => 'pageSize',
        'sortCol'  => 'sortCol',
        'sortType' => 'sortType',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNum) {
            $res['pageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->sortCol) {
            $res['sortCol'] = $this->sortCol;
        }
        if (null !== $this->sortType) {
            $res['sortType'] = $this->sortType;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSurveyJobDownLoadJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pageNum'])) {
            $model->pageNum = $map['pageNum'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['sortCol'])) {
            $model->sortCol = $map['sortCol'];
        }
        if (isset($map['sortType'])) {
            $model->sortType = $map['sortType'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
