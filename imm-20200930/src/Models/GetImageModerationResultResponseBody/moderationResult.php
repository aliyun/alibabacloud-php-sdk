<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\GetImageModerationResultResponseBody;

use AlibabaCloud\SDK\Imm\V20200930\Models\GetImageModerationResultResponseBody\moderationResult\frames;
use AlibabaCloud\Tea\Model;

class moderationResult extends Model
{
    /**
     * @var string[]
     */
    public $categories;

    /**
     * @var frames
     */
    public $frames;

    /**
     * @example block
     *
     * @var string
     */
    public $suggestion;

    /**
     * @example oss://test-bucket/test-object
     *
     * @var string
     */
    public $URI;
    protected $_name = [
        'categories' => 'Categories',
        'frames'     => 'Frames',
        'suggestion' => 'Suggestion',
        'URI'        => 'URI',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categories) {
            $res['Categories'] = $this->categories;
        }
        if (null !== $this->frames) {
            $res['Frames'] = null !== $this->frames ? $this->frames->toMap() : null;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moderationResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = $map['Categories'];
            }
        }
        if (isset($map['Frames'])) {
            $model->frames = frames::fromMap($map['Frames']);
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
