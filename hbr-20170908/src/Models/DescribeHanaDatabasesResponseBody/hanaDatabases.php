<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaDatabasesResponseBody;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaDatabasesResponseBody\hanaDatabases\hanaDatabase;
use AlibabaCloud\Tea\Model;

class hanaDatabases extends Model
{
    /**
     * @var hanaDatabase[]
     */
    public $hanaDatabase;
    protected $_name = [
        'hanaDatabase' => 'HanaDatabase',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hanaDatabase) {
            $res['HanaDatabase'] = [];
            if (null !== $this->hanaDatabase && \is_array($this->hanaDatabase)) {
                $n = 0;
                foreach ($this->hanaDatabase as $item) {
                    $res['HanaDatabase'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hanaDatabases
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HanaDatabase'])) {
            if (!empty($map['HanaDatabase'])) {
                $model->hanaDatabase = [];
                $n                   = 0;
                foreach ($map['HanaDatabase'] as $item) {
                    $model->hanaDatabase[$n++] = null !== $item ? hanaDatabase::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
