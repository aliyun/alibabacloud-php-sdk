<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbInstanceResponseBody\dbInstance;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbInstanceResponseBody\dbInstance\readOnlyInstances\readOnlyInstance;
use AlibabaCloud\Tea\Model;

class readOnlyInstances extends Model
{
    /**
     * @var readOnlyInstance[]
     */
    public $readOnlyInstance;
    protected $_name = [
        'readOnlyInstance' => 'ReadOnlyInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->readOnlyInstance) {
            $res['ReadOnlyInstance'] = [];
            if (null !== $this->readOnlyInstance && \is_array($this->readOnlyInstance)) {
                $n = 0;
                foreach ($this->readOnlyInstance as $item) {
                    $res['ReadOnlyInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return readOnlyInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReadOnlyInstance'])) {
            if (!empty($map['ReadOnlyInstance'])) {
                $model->readOnlyInstance = [];
                $n                       = 0;
                foreach ($map['ReadOnlyInstance'] as $item) {
                    $model->readOnlyInstance[$n++] = null !== $item ? readOnlyInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
