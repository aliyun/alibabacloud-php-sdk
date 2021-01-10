<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnnotationJobListResponseBody\annotationJobList\annotationJob;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnnotationJobListResponseBody\annotationJobList\annotationJob\videoAnnotationResult\annotations;
use AlibabaCloud\Tea\Model;

class videoAnnotationResult extends Model
{
    /**
     * @var annotations
     */
    public $annotations;

    /**
     * @var string
     */
    public $details;
    protected $_name = [
        'annotations' => 'Annotations',
        'details'     => 'Details',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotations) {
            $res['Annotations'] = null !== $this->annotations ? $this->annotations->toMap() : null;
        }
        if (null !== $this->details) {
            $res['Details'] = $this->details;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoAnnotationResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Annotations'])) {
            $model->annotations = annotations::fromMap($map['Annotations']);
        }
        if (isset($map['Details'])) {
            $model->details = $map['Details'];
        }

        return $model;
    }
}
