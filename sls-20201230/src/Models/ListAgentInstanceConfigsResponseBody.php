<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListAgentInstanceConfigsResponseBody\configs;

class ListAgentInstanceConfigsResponseBody extends Model
{
    /**
     * @var configs[]
     */
    public $configs;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'configs' => 'configs',
        'size' => 'size',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->configs)) {
            Model::validateArray($this->configs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configs) {
            if (\is_array($this->configs)) {
                $res['configs'] = [];
                $n1 = 0;
                foreach ($this->configs as $item1) {
                    $res['configs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
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
        if (isset($map['configs'])) {
            if (!empty($map['configs'])) {
                $model->configs = [];
                $n1 = 0;
                foreach ($map['configs'] as $item1) {
                    $model->configs[$n1] = configs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
