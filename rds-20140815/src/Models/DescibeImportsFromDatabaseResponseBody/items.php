<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescibeImportsFromDatabaseResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescibeImportsFromDatabaseResponseBody\items\importResultFromDB;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var importResultFromDB[]
     */
    public $importResultFromDB;
    protected $_name = [
        'importResultFromDB' => 'ImportResultFromDB',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->importResultFromDB) {
            $res['ImportResultFromDB'] = [];
            if (null !== $this->importResultFromDB && \is_array($this->importResultFromDB)) {
                $n = 0;
                foreach ($this->importResultFromDB as $item) {
                    $res['ImportResultFromDB'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImportResultFromDB'])) {
            if (!empty($map['ImportResultFromDB'])) {
                $model->importResultFromDB = [];
                $n                         = 0;
                foreach ($map['ImportResultFromDB'] as $item) {
                    $model->importResultFromDB[$n++] = null !== $item ? importResultFromDB::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
