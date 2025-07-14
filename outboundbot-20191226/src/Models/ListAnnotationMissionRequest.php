<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class ListAnnotationMissionRequest extends Model
{
    /**
     * @example 0943abcb-bd7d-4ace-8cf7-97d39d4dd0b9
     *
     * @var string
     */
    public $annotationMissionId;

    /**
     * @var string
     */
    public $annotationMissionName;

    /**
     * @var int[]
     */
    public $annotationStatusListFilter;

    /**
     * @example [1]
     *
     * @var string
     */
    public $annotationStatusListStringFilter;

    /**
     * @example 1673280000000
     *
     * @var int
     */
    public $createTimeEndFilter;

    /**
     * @example 1661961600000
     *
     * @var int
     */
    public $createTimeStartFilter;

    /**
     * @example 191ef468-75a2-4004-9441-a5c31bf5cd9d
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'annotationMissionId' => 'AnnotationMissionId',
        'annotationMissionName' => 'AnnotationMissionName',
        'annotationStatusListFilter' => 'AnnotationStatusListFilter',
        'annotationStatusListStringFilter' => 'AnnotationStatusListStringFilter',
        'createTimeEndFilter' => 'CreateTimeEndFilter',
        'createTimeStartFilter' => 'CreateTimeStartFilter',
        'instanceId' => 'InstanceId',
        'pageIndex' => 'PageIndex',
        'pageSize' => 'PageSize',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotationMissionId) {
            $res['AnnotationMissionId'] = $this->annotationMissionId;
        }
        if (null !== $this->annotationMissionName) {
            $res['AnnotationMissionName'] = $this->annotationMissionName;
        }
        if (null !== $this->annotationStatusListFilter) {
            $res['AnnotationStatusListFilter'] = $this->annotationStatusListFilter;
        }
        if (null !== $this->annotationStatusListStringFilter) {
            $res['AnnotationStatusListStringFilter'] = $this->annotationStatusListStringFilter;
        }
        if (null !== $this->createTimeEndFilter) {
            $res['CreateTimeEndFilter'] = $this->createTimeEndFilter;
        }
        if (null !== $this->createTimeStartFilter) {
            $res['CreateTimeStartFilter'] = $this->createTimeStartFilter;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAnnotationMissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnnotationMissionId'])) {
            $model->annotationMissionId = $map['AnnotationMissionId'];
        }
        if (isset($map['AnnotationMissionName'])) {
            $model->annotationMissionName = $map['AnnotationMissionName'];
        }
        if (isset($map['AnnotationStatusListFilter'])) {
            if (!empty($map['AnnotationStatusListFilter'])) {
                $model->annotationStatusListFilter = $map['AnnotationStatusListFilter'];
            }
        }
        if (isset($map['AnnotationStatusListStringFilter'])) {
            $model->annotationStatusListStringFilter = $map['AnnotationStatusListStringFilter'];
        }
        if (isset($map['CreateTimeEndFilter'])) {
            $model->createTimeEndFilter = $map['CreateTimeEndFilter'];
        }
        if (isset($map['CreateTimeStartFilter'])) {
            $model->createTimeStartFilter = $map['CreateTimeStartFilter'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
