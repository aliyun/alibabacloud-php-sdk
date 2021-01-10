<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnnotationJobListResponseBody\annotationJobList\annotationJob\videoAnnotationResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnnotationJobListResponseBody\annotationJobList\annotationJob\videoAnnotationResult\annotations\annotation;
use AlibabaCloud\Tea\Model;

class annotations extends Model
{
    /**
     * @var annotation[]
     */
    public $annotation;
    protected $_name = [
        'annotation' => 'Annotation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotation) {
            $res['Annotation'] = [];
            if (null !== $this->annotation && \is_array($this->annotation)) {
                $n = 0;
                foreach ($this->annotation as $item) {
                    $res['Annotation'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return annotations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Annotation'])) {
            if (!empty($map['Annotation'])) {
                $model->annotation = [];
                $n                 = 0;
                foreach ($map['Annotation'] as $item) {
                    $model->annotation[$n++] = null !== $item ? annotation::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
