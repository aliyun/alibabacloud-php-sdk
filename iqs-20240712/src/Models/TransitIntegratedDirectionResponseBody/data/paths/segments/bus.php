<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments;

use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\bus\buslines;
use AlibabaCloud\Tea\Model;

class bus extends Model
{
    /**
     * @var buslines[]
     */
    public $buslines;

    /**
     * @var string
     */
    public $index;
    protected $_name = [
        'buslines' => 'buslines',
        'index'    => 'index',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buslines) {
            $res['buslines'] = [];
            if (null !== $this->buslines && \is_array($this->buslines)) {
                $n = 0;
                foreach ($this->buslines as $item) {
                    $res['buslines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['buslines'])) {
            if (!empty($map['buslines'])) {
                $model->buslines = [];
                $n               = 0;
                foreach ($map['buslines'] as $item) {
                    $model->buslines[$n++] = null !== $item ? buslines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }

        return $model;
    }
}
