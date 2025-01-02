<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\editingConfig;

use AlibabaCloud\Tea\Model;

class backgroundMusicConfig extends Model
{
    /**
     * @var string
     */
    public $style;

    /**
     * @example 0.2
     *
     * @var float
     */
    public $volume;
    protected $_name = [
        'style'  => 'Style',
        'volume' => 'Volume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->style) {
            $res['Style'] = $this->style;
        }
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backgroundMusicConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Style'])) {
            $model->style = $map['Style'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}
