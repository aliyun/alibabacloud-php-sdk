<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\SearchCustomLinesResponseBody;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\SearchCustomLinesResponseBody\customLines\customLine;
use AlibabaCloud\Tea\Model;

class customLines extends Model
{
    /**
     * @var customLine[]
     */
    public $customLine;
    protected $_name = [
        'customLine' => 'CustomLine',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customLine) {
            $res['CustomLine'] = [];
            if (null !== $this->customLine && \is_array($this->customLine)) {
                $n = 0;
                foreach ($this->customLine as $item) {
                    $res['CustomLine'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customLines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomLine'])) {
            if (!empty($map['CustomLine'])) {
                $model->customLine = [];
                $n                 = 0;
                foreach ($map['CustomLine'] as $item) {
                    $model->customLine[$n++] = null !== $item ? customLine::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
