<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class ModifyAnnotationMissionRequest extends Model
{
    /**
     * @example c88cc004-de69-4eee-aa5f-2efed533a54e
     *
     * @var string
     */
    public $annotationMissionId;

    /**
     * @var string
     */
    public $annotationMissionName;

    /**
     * @example 2
     *
     * @var int
     */
    public $annotationStatus;

    /**
     * @example false
     *
     * @var bool
     */
    public $delete;
    protected $_name = [
        'annotationMissionId' => 'AnnotationMissionId',
        'annotationMissionName' => 'AnnotationMissionName',
        'annotationStatus' => 'AnnotationStatus',
        'delete' => 'Delete',
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
        if (null !== $this->annotationStatus) {
            $res['AnnotationStatus'] = $this->annotationStatus;
        }
        if (null !== $this->delete) {
            $res['Delete'] = $this->delete;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAnnotationMissionRequest
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
        if (isset($map['AnnotationStatus'])) {
            $model->annotationStatus = $map['AnnotationStatus'];
        }
        if (isset($map['Delete'])) {
            $model->delete = $map['Delete'];
        }

        return $model;
    }
}
