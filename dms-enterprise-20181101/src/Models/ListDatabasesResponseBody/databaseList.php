<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDatabasesResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDatabasesResponseBody\databaseList\database;
use AlibabaCloud\Tea\Model;

class databaseList extends Model
{
    /**
     * @var database[]
     */
    public $database;
    protected $_name = [
        'database' => 'Database',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->database) {
            $res['Database'] = [];
            if (null !== $this->database && \is_array($this->database)) {
                $n = 0;
                foreach ($this->database as $item) {
                    $res['Database'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databaseList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Database'])) {
            if (!empty($map['Database'])) {
                $model->database = [];
                $n               = 0;
                foreach ($map['Database'] as $item) {
                    $model->database[$n++] = null !== $item ? database::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
