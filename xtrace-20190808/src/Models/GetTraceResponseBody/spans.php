<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceResponseBody\spans\span;

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
        if (\is_array($this->span)) {
            Model::validateArray($this->span);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->span) {
            if (\is_array($this->span)) {
                $res['Span'] = [];
                $n1 = 0;
                foreach ($this->span as $item1) {
                    $res['Span'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Span'])) {
            if (!empty($map['Span'])) {
                $model->span = [];
                $n1 = 0;
                foreach ($map['Span'] as $item1) {
                    $model->span[$n1] = span::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
