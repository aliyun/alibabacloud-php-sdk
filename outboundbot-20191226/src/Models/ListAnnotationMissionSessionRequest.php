<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class ListAnnotationMissionSessionRequest extends Model
{
    /**
     * @example 8434a4b0-41fc-41b1-aa75-bbd1f2ab0c8d
     *
     * @var string
     */
    public $annotationMissionId;

    /**
     * @example 8434a4b0-41fc-41b1-aa75-bbd1f2ab0c8d
     *
     * @var string
     */
    public $annotationMissionSessionId;

    /**
     * @example 0
     *
     * @var int
     */
    public $environment;

    /**
     * @example [1]
     *
     * @var string
     */
    public $includeStatusListJsonString;

    /**
     * @example 3
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'annotationMissionId' => 'AnnotationMissionId',
        'annotationMissionSessionId' => 'AnnotationMissionSessionId',
        'environment' => 'Environment',
        'includeStatusListJsonString' => 'IncludeStatusListJsonString',
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
        if (null !== $this->annotationMissionSessionId) {
            $res['AnnotationMissionSessionId'] = $this->annotationMissionSessionId;
        }
        if (null !== $this->environment) {
            $res['Environment'] = $this->environment;
        }
        if (null !== $this->includeStatusListJsonString) {
            $res['IncludeStatusListJsonString'] = $this->includeStatusListJsonString;
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
     * @return ListAnnotationMissionSessionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnnotationMissionId'])) {
            $model->annotationMissionId = $map['AnnotationMissionId'];
        }
        if (isset($map['AnnotationMissionSessionId'])) {
            $model->annotationMissionSessionId = $map['AnnotationMissionSessionId'];
        }
        if (isset($map['Environment'])) {
            $model->environment = $map['Environment'];
        }
        if (isset($map['IncludeStatusListJsonString'])) {
            $model->includeStatusListJsonString = $map['IncludeStatusListJsonString'];
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
