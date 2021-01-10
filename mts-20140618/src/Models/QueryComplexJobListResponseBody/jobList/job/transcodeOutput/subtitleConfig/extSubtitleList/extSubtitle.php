<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryComplexJobListResponseBody\jobList\job\transcodeOutput\subtitleConfig\extSubtitleList;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryComplexJobListResponseBody\jobList\job\transcodeOutput\subtitleConfig\extSubtitleList\extSubtitle\input;
use AlibabaCloud\Tea\Model;

class extSubtitle extends Model
{
    /**
     * @var string
     */
    public $charEnc;

    /**
     * @var string
     */
    public $fontName;

    /**
     * @var input
     */
    public $input;
    protected $_name = [
        'charEnc'  => 'CharEnc',
        'fontName' => 'FontName',
        'input'    => 'Input',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->charEnc) {
            $res['CharEnc'] = $this->charEnc;
        }
        if (null !== $this->fontName) {
            $res['FontName'] = $this->fontName;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extSubtitle
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CharEnc'])) {
            $model->charEnc = $map['CharEnc'];
        }
        if (isset($map['FontName'])) {
            $model->fontName = $map['FontName'];
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }

        return $model;
    }
}
