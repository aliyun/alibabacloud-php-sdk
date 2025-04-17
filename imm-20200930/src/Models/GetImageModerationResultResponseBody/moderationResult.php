<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\GetImageModerationResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetImageModerationResultResponseBody\moderationResult\frames;

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
     * @var string
     */
    public $suggestion;

    /**
     * @var string
     */
    public $URI;
    protected $_name = [
        'categories' => 'Categories',
        'frames' => 'Frames',
        'suggestion' => 'Suggestion',
        'URI' => 'URI',
    ];

    public function validate()
    {
        if (\is_array($this->categories)) {
            Model::validateArray($this->categories);
        }
        if (null !== $this->frames) {
            $this->frames->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categories) {
            if (\is_array($this->categories)) {
                $res['Categories'] = [];
                $n1 = 0;
                foreach ($this->categories as $item1) {
                    $res['Categories'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->frames) {
            $res['Frames'] = null !== $this->frames ? $this->frames->toArray($noStream) : $this->frames;
        }

        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }

        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
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
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = [];
                $n1 = 0;
                foreach ($map['Categories'] as $item1) {
                    $model->categories[$n1++] = $item1;
                }
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
