<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceResponseBody;

use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceResponseBody\spans\span;
use AlibabaCloud\Tea\Model;

class spans extends Model
{
    /**
     * @var span[]
     */
    public $span;
    protected $_name = [
        'span' => 'Span',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->span) {
            $res['Span'] = [];
            if (null !== $this->span && \is_array($this->span)) {
                $n = 0;
                foreach ($this->span as $item) {
                    $res['Span'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spans
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Span'])) {
            if (!empty($map['Span'])) {
                $model->span = [];
                $n           = 0;
                foreach ($map['Span'] as $item) {
                    $model->span[$n++] = null !== $item ? span::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
