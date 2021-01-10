<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnnotationJobListResponseBody;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnnotationJobListResponseBody\annotationJobList\annotationJob;
use AlibabaCloud\Tea\Model;

class annotationJobList extends Model
{
    /**
     * @var annotationJob[]
     */
    public $annotationJob;
    protected $_name = [
        'annotationJob' => 'AnnotationJob',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotationJob) {
            $res['AnnotationJob'] = [];
            if (null !== $this->annotationJob && \is_array($this->annotationJob)) {
                $n = 0;
                foreach ($this->annotationJob as $item) {
                    $res['AnnotationJob'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return annotationJobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnnotationJob'])) {
            if (!empty($map['AnnotationJob'])) {
                $model->annotationJob = [];
                $n                    = 0;
                foreach ($map['AnnotationJob'] as $item) {
                    $model->annotationJob[$n++] = null !== $item ? annotationJob::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
