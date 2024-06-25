<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDatabasesResponseBody;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDatabasesResponseBody\result\databases;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var databases[]
     */
    public $databases;
    protected $_name = [
        'databases' => 'databases',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databases) {
            $res['databases'] = [];
            if (null !== $this->databases && \is_array($this->databases)) {
                $n = 0;
                foreach ($this->databases as $item) {
                    $res['databases'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['databases'])) {
            if (!empty($map['databases'])) {
                $model->databases = [];
                $n                = 0;
                foreach ($map['databases'] as $item) {
                    $model->databases[$n++] = null !== $item ? databases::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
