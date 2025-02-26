<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class ListLayersOutput extends Model
{
    /**
     * @var Layer[]
     */
    public $layers;
    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'layers'    => 'layers',
        'nextToken' => 'nextToken',
    ];

    public function validate()
    {
        if (\is_array($this->layers)) {
            Model::validateArray($this->layers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->layers) {
            if (\is_array($this->layers)) {
                $res['layers'] = [];
                $n1            = 0;
                foreach ($this->layers as $item1) {
                    $res['layers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
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
        if (isset($map['layers'])) {
            if (!empty($map['layers'])) {
                $model->layers = [];
                $n1            = 0;
                foreach ($map['layers'] as $item1) {
                    $model->layers[$n1++] = Layer::fromMap($item1);
                }
            }
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        return $model;
    }
}
