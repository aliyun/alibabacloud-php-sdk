<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDedicatedClusterInstanceListResponseBody;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDedicatedClusterInstanceListResponseBody\instances\dbInstance;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @var dbInstance[]
     */
    public $dbInstance;
    protected $_name = [
        'dbInstance' => 'dbInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbInstance) {
            $res['dbInstance'] = [];
            if (null !== $this->dbInstance && \is_array($this->dbInstance)) {
                $n = 0;
                foreach ($this->dbInstance as $item) {
                    $res['dbInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dbInstance'])) {
            if (!empty($map['dbInstance'])) {
                $model->dbInstance = [];
                $n                 = 0;
                foreach ($map['dbInstance'] as $item) {
                    $model->dbInstance[$n++] = null !== $item ? dbInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
