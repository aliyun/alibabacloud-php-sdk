<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveAnnotationMissionSessionListResponseBody\data;

use AlibabaCloud\Dara\Model;

class saveAnnotationMissionSessionListRequest extends Model
{
    /**
     * @var string
     */
    public $annotationMissionSessionListJsonString;
    protected $_name = [
        'annotationMissionSessionListJsonString' => 'AnnotationMissionSessionListJsonString',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotationMissionSessionListJsonString) {
            $res['AnnotationMissionSessionListJsonString'] = $this->annotationMissionSessionListJsonString;
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
        if (isset($map['AnnotationMissionSessionListJsonString'])) {
            $model->annotationMissionSessionListJsonString = $map['AnnotationMissionSessionListJsonString'];
        }

        return $model;
    }
}
