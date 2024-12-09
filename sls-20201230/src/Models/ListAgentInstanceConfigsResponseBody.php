<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListAgentInstanceConfigsResponseBody extends Model
{
    /**
     * @var string[]
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
        'size'    => 'size',
        'total'   => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configs) {
            $res['configs'] = $this->configs;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAgentInstanceConfigsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['configs'])) {
            if (!empty($map['configs'])) {
                $model->configs = $map['configs'];
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
