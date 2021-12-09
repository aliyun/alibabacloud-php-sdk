<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnnotationJobListResponseBody\annotationJobList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnnotationJobListResponseBody\nonExistIds;
use AlibabaCloud\Tea\Model;

class QueryAnnotationJobListResponseBody extends Model
{
    /**
     * @var annotationJobList
     */
    public $annotationJobList;

    /**
     * @var nonExistIds
     */
    public $nonExistIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'annotationJobList' => 'AnnotationJobList',
        'nonExistIds'       => 'NonExistIds',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotationJobList) {
            $res['AnnotationJobList'] = null !== $this->annotationJobList ? $this->annotationJobList->toMap() : null;
        }
        if (null !== $this->nonExistIds) {
            $res['NonExistIds'] = null !== $this->nonExistIds ? $this->nonExistIds->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAnnotationJobListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnnotationJobList'])) {
            $model->annotationJobList = annotationJobList::fromMap($map['AnnotationJobList']);
        }
        if (isset($map['NonExistIds'])) {
            $model->nonExistIds = nonExistIds::fromMap($map['NonExistIds']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
