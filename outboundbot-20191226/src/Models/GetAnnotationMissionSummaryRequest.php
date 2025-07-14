<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class GetAnnotationMissionSummaryRequest extends Model
{
    /**
     * @example 50e53ac8-24a4-46d5-b174-ee88867f4780
     *
     * @var string
     */
    public $annotationMissionId;
    protected $_name = [
        'annotationMissionId' => 'AnnotationMissionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotationMissionId) {
            $res['AnnotationMissionId'] = $this->annotationMissionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAnnotationMissionSummaryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnnotationMissionId'])) {
            $model->annotationMissionId = $map['AnnotationMissionId'];
        }

        return $model;
    }
}
