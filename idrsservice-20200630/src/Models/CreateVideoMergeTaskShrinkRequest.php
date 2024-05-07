<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class CreateVideoMergeTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $videoMergeRequestShrink;
    protected $_name = [
        'videoMergeRequestShrink' => 'VideoMergeRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoMergeRequestShrink) {
            $res['VideoMergeRequest'] = $this->videoMergeRequestShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVideoMergeTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoMergeRequest'])) {
            $model->videoMergeRequestShrink = $map['VideoMergeRequest'];
        }

        return $model;
    }
}
