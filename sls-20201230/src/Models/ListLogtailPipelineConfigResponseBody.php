<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class ListLogtailPipelineConfigResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $configs;

    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'configs' => 'configs',
        'count' => 'count',
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
                    $res['configs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->count) {
            $res['count'] = $this->count;
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
                    $model->configs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['count'])) {
            $model->count = $map['count'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
