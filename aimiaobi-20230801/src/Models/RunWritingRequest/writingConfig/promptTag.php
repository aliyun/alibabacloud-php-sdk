<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingRequest\writingConfig;

use AlibabaCloud\Dara\Model;

class promptTag extends Model
{
    /**
     * @var string
     */
    public $necessaryTips;
    /**
     * @var string
     */
    public $position;
    /**
     * @var string
     */
    public $reverseWords;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
