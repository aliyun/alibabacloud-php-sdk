<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\bus\buslines;

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
        'index' => 'index',
    ];

    public function validate()
    {
        if (\is_array($this->buslines)) {
            Model::validateArray($this->buslines);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buslines) {
            if (\is_array($this->buslines)) {
                $res['buslines'] = [];
                $n1 = 0;
                foreach ($this->buslines as $item1) {
                    $res['buslines'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->index) {
            $res['index'] = $this->index;
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
        if (isset($map['buslines'])) {
            if (!empty($map['buslines'])) {
                $model->buslines = [];
                $n1 = 0;
                foreach ($map['buslines'] as $item1) {
                    $model->buslines[$n1++] = buslines::fromMap($item1);
                }
            }
        }

        if (isset($map['index'])) {
            $model->index = $map['index'];
        }

        return $model;
    }
}
