<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class TextQueryResult extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var Text[]
     */
    public $texts;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'requestId' => 'requestId',
        'texts' => 'texts',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->texts)) {
            Model::validateArray($this->texts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->texts) {
            if (\is_array($this->texts)) {
                $res['texts'] = [];
                $n1 = 0;
                foreach ($this->texts as $item1) {
                    $res['texts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['texts'])) {
            if (!empty($map['texts'])) {
                $model->texts = [];
                $n1 = 0;
                foreach ($map['texts'] as $item1) {
                    $model->texts[$n1++] = Text::fromMap($item1);
                }
            }
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
