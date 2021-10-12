<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribePolarxDbInstancesResponseBody;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribePolarxDbInstancesResponseBody\dbInstances\dbInstance;
use AlibabaCloud\Tea\Model;

class dbInstances extends Model
{
    /**
     * @var dbInstance[]
     */
    public $dbInstance;
    protected $_name = [
        'dbInstance' => 'DbInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbInstance) {
            $res['DbInstance'] = [];
            if (null !== $this->dbInstance && \is_array($this->dbInstance)) {
                $n = 0;
                foreach ($this->dbInstance as $item) {
                    $res['DbInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbInstance'])) {
            if (!empty($map['DbInstance'])) {
                $model->dbInstance = [];
                $n                 = 0;
                foreach ($map['DbInstance'] as $item) {
                    $model->dbInstance[$n++] = null !== $item ? dbInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
