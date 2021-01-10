<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnnotationJobListResponseBody\annotationJobList\annotationJob\videoAnnotationResult\annotations;

use AlibabaCloud\Tea\Model;

class annotation extends Model
{
    /**
     * @var string
     */
    public $score;

    /**
     * @var string
     */
    public $label;
    protected $_name = [
        'score' => 'Score',
        'label' => 'Label',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return annotation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        return $model;
    }
}
