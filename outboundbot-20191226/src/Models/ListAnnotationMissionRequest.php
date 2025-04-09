<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class ListAnnotationMissionRequest extends Model
{
    /**
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
     * @var string
     */
    public $annotationStatusListStringFilter;

    /**
     * @var int
     */
    public $createTimeEndFilter;

    /**
     * @var int
     */
    public $createTimeStartFilter;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $pageIndex;

    /**
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

    public function validate()
    {
        if (\is_array($this->annotationStatusListFilter)) {
            Model::validateArray($this->annotationStatusListFilter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotationMissionId) {
            $res['AnnotationMissionId'] = $this->annotationMissionId;
        }

        if (null !== $this->annotationMissionName) {
            $res['AnnotationMissionName'] = $this->annotationMissionName;
        }

        if (null !== $this->annotationStatusListFilter) {
            if (\is_array($this->annotationStatusListFilter)) {
                $res['AnnotationStatusListFilter'] = [];
                $n1 = 0;
                foreach ($this->annotationStatusListFilter as $item1) {
                    $res['AnnotationStatusListFilter'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->annotationStatusListFilter = [];
                $n1 = 0;
                foreach ($map['AnnotationStatusListFilter'] as $item1) {
                    $model->annotationStatusListFilter[$n1++] = $item1;
                }
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
