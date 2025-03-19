<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class ListLayersOutput extends Model
{
    /**
     * @var Layer[]
     */
    public $layers;

    /**
     * @example next-layer-name
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'layers' => 'layers',
        'nextToken' => 'nextToken',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->layers) {
            $res['layers'] = [];
            if (null !== $this->layers && \is_array($this->layers)) {
                $n = 0;
                foreach ($this->layers as $item) {
                    $res['layers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLayersOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['layers'])) {
            if (!empty($map['layers'])) {
                $model->layers = [];
                $n = 0;
                foreach ($map['layers'] as $item) {
                    $model->layers[$n++] = null !== $item ? Layer::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        return $model;
    }
}
