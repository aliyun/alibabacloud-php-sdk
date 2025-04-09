<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class ListAnnotationMissionSessionRequest extends Model
{
    /**
     * @var string
     */
    public $annotationMissionId;

    /**
     * @var string
     */
    public $annotationMissionSessionId;

    /**
     * @var int
     */
    public $environment;

    /**
     * @var string
     */
    public $includeStatusListJsonString;

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
        'annotationMissionSessionId' => 'AnnotationMissionSessionId',
        'environment' => 'Environment',
        'includeStatusListJsonString' => 'IncludeStatusListJsonString',
        'pageIndex' => 'PageIndex',
        'pageSize' => 'PageSize',
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
