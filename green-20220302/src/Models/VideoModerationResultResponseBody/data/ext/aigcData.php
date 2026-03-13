<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\ext;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\ext\aigcData\AIGC;

class aigcData extends Model
{
    /**
     * @var AIGC
     */
    public $AIGC;

    /**
     * @var string
     */
    public $result;
    protected $_name = [
        'AIGC' => 'AIGC',
        'result' => 'Result',
    ];

    public function validate()
    {
        if (null !== $this->AIGC) {
            $this->AIGC->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIGC) {
            $res['AIGC'] = null !== $this->AIGC ? $this->AIGC->toArray($noStream) : $this->AIGC;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
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
        if (isset($map['AIGC'])) {
            $model->AIGC = AIGC::fromMap($map['AIGC']);
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
