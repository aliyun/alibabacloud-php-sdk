<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetNextResultToVerifyResponseBody\data\dialogues\dialogue\deltas\delta;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetNextResultToVerifyResponseBody\data\dialogues\dialogue\deltas\delta\source\line;

class source extends Model
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
        'line' => 'Line',
        'position' => 'Position',
    ];

    public function validate()
    {
        if (null !== $this->line) {
            $this->line->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->line) {
            $res['Line'] = null !== $this->line ? $this->line->toArray($noStream) : $this->line;
        }

        if (null !== $this->position) {
            $res['Position'] = $this->position;
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
        if (isset($map['Line'])) {
            $model->line = line::fromMap($map['Line']);
        }

        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }

        return $model;
    }
}
