<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPagedInstanceResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPagedInstanceResponseBody\data\instance;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var instance[]
     */
    public $instance;
    protected $_name = [
        'instance' => 'Instance',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instance) {
            $res['Instance'] = [];
            if (null !== $this->instance && \is_array($this->instance)) {
                $n = 0;
                foreach ($this->instance as $item) {
                    $res['Instance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Instance'])) {
            if (!empty($map['Instance'])) {
                $model->instance = [];
                $n = 0;
                foreach ($map['Instance'] as $item) {
                    $model->instance[$n++] = null !== $item ? instance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
