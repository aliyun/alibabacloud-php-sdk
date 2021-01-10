<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\VerifySentenceResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\VerifySentenceResponseBody\data\delta;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var delta[]
     */
    public $delta;
    protected $_name = [
        'delta' => 'Delta',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->delta) {
            $res['Delta'] = [];
            if (null !== $this->delta && \is_array($this->delta)) {
                $n = 0;
                foreach ($this->delta as $item) {
                    $res['Delta'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Delta'])) {
            if (!empty($map['Delta'])) {
                $model->delta = [];
                $n            = 0;
                foreach ($map['Delta'] as $item) {
                    $model->delta[$n++] = null !== $item ? delta::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
