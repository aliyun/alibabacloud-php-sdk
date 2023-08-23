<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class ScgSearchShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $scgFilterShrink;

    /**
     * @example MC201132
     *
     * @var string
     */
    public $topicId;
    protected $_name = [
        'scgFilterShrink' => 'ScgFilter',
        'topicId'         => 'TopicId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scgFilterShrink) {
            $res['ScgFilter'] = $this->scgFilterShrink;
        }
        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScgSearchShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScgFilter'])) {
            $model->scgFilterShrink = $map['ScgFilter'];
        }
        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }

        return $model;
    }
}
