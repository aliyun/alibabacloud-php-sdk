<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\subtitleConfig\extSubtitleList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\subtitleConfig\extSubtitleList\extSubtitle\input;

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
        'charEnc' => 'CharEnc',
        'fontName' => 'FontName',
        'input' => 'Input',
    ];

    public function validate()
    {
        if (null !== $this->input) {
            $this->input->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->charEnc) {
            $res['CharEnc'] = $this->charEnc;
        }

        if (null !== $this->fontName) {
            $res['FontName'] = $this->fontName;
        }

        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toArray($noStream) : $this->input;
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
