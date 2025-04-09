<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class ModifyAnnotationMissionRequest extends Model
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
     * @var int
     */
    public $annotationStatus;

    /**
     * @var bool
     */
    public $delete;
    protected $_name = [
        'annotationMissionId' => 'AnnotationMissionId',
        'annotationMissionName' => 'AnnotationMissionName',
        'annotationStatus' => 'AnnotationStatus',
        'delete' => 'Delete',
    ];

    public function validate()
    {
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

        if (null !== $this->annotationStatus) {
            $res['AnnotationStatus'] = $this->annotationStatus;
        }

        if (null !== $this->delete) {
            $res['Delete'] = $this->delete;
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

        if (isset($map['AnnotationStatus'])) {
            $model->annotationStatus = $map['AnnotationStatus'];
        }

        if (isset($map['Delete'])) {
            $model->delete = $map['Delete'];
        }

        return $model;
    }
}
