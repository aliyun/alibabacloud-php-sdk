<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunStepByStepWritingRequest\writingConfig;

use AlibabaCloud\Tea\Model;

class promptTag extends Model
{
    /**
     * @example 必要提示
     *
     * @var string
     */
    public $necessaryTips;

    /**
     * @example 立场
     *
     * @var string
     */
    public $position;

    /**
     * @example 反向词
     *
     * @var string
     */
    public $reverseWords;

    /**
     * @example 主题
     *
     * @var string
     */
    public $theme;
    protected $_name = [
        'necessaryTips' => 'NecessaryTips',
        'position'      => 'Position',
        'reverseWords'  => 'ReverseWords',
        'theme'         => 'Theme',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->necessaryTips) {
            $res['NecessaryTips'] = $this->necessaryTips;
        }
        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }
        if (null !== $this->reverseWords) {
            $res['ReverseWords'] = $this->reverseWords;
        }
        if (null !== $this->theme) {
            $res['Theme'] = $this->theme;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return promptTag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NecessaryTips'])) {
            $model->necessaryTips = $map['NecessaryTips'];
        }
        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }
        if (isset($map['ReverseWords'])) {
            $model->reverseWords = $map['ReverseWords'];
        }
        if (isset($map['Theme'])) {
            $model->theme = $map['Theme'];
        }

        return $model;
    }
}
