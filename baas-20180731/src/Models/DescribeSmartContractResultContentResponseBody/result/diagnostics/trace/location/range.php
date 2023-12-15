<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeSmartContractResultContentResponseBody\result\diagnostics\trace\location;

use AlibabaCloud\Tea\Model;

class range extends Model
{
    /**
     * @var int
     */
    public $character;

    /**
     * @var int
     */
    public $line;
    protected $_name = [
        'character' => 'Character',
        'line'      => 'Line',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->character) {
            $res['Character'] = $this->character;
        }
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return range
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Character'])) {
            $model->character = $map['Character'];
        }
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }

        return $model;
    }
}
