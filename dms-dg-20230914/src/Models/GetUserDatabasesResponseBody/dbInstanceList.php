<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsdg\V20230914\Models\GetUserDatabasesResponseBody;

use AlibabaCloud\SDK\Dmsdg\V20230914\Models\GetUserDatabasesResponseBody\dbInstanceList\dbInstance;
use AlibabaCloud\Tea\Model;

class dbInstanceList extends Model
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
     * @return dbInstanceList
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
