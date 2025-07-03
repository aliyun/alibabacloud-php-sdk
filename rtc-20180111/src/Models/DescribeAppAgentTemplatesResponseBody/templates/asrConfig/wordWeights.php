<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppAgentTemplatesResponseBody\templates\asrConfig;

use AlibabaCloud\Dara\Model;

class wordWeights extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $weight;

    /**
     * @var string
     */
    public $word;
    protected $_name = [
        'lang' => 'Lang',
        'weight' => 'Weight',
        'word' => 'Word',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        if (null !== $this->word) {
            $res['Word'] = $this->word;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        if (isset($map['Word'])) {
            $model->word = $map['Word'];
        }

        return $model;
    }
}
