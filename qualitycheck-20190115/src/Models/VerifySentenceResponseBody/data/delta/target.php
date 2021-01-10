<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\VerifySentenceResponseBody\data\delta;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\VerifySentenceResponseBody\data\delta\target\line;
use AlibabaCloud\Tea\Model;

class target extends Model
{
    /**
     * @var line
     */
    public $line;

    /**
     * @var int
     */
    public $position;
    protected $_name = [
        'line'     => 'Line',
        'position' => 'Position',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->line) {
            $res['Line'] = null !== $this->line ? $this->line->toMap() : null;
        }
        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return target
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Line'])) {
            $model->line = line::fromMap($map['Line']);
        }
        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }

        return $model;
    }
}
