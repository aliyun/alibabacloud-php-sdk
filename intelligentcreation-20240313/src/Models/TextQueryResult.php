<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

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
     * @example 10
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'requestId' => 'requestId',
        'texts'     => 'texts',
        'total'     => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->texts) {
            $res['texts'] = [];
            if (null !== $this->texts && \is_array($this->texts)) {
                $n = 0;
                foreach ($this->texts as $item) {
                    $res['texts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TextQueryResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['texts'])) {
            if (!empty($map['texts'])) {
                $model->texts = [];
                $n            = 0;
                foreach ($map['texts'] as $item) {
                    $model->texts[$n++] = null !== $item ? Text::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
