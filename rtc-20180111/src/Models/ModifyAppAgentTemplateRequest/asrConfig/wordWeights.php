<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppAgentTemplateRequest\asrConfig;

use AlibabaCloud\Tea\Model;

class wordWeights extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description This parameter is required.
     *
     * @example 4
     *
     * @var int
     */
    public $weight;

    /**
     * @description This parameter is required.
     *
     * @example 苹果
     *
     * @var string
     */
    public $word;
    protected $_name = [
        'lang' => 'Lang',
        'weight' => 'Weight',
        'word' => 'Word',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return wordWeights
     */
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
