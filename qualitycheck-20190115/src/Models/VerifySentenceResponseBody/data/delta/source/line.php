<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\VerifySentenceResponseBody\data\delta\source;

use AlibabaCloud\Tea\Model;

class line extends Model
{
    /**
     * @var string[]
     */
    public $line;
    protected $_name = [
        'line' => 'Line',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return line
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Line'])) {
            if (!empty($map['Line'])) {
                $model->line = $map['Line'];
            }
        }

        return $model;
    }
}
