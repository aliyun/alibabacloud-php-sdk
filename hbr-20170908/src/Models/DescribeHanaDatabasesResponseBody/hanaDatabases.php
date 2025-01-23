<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaDatabasesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaDatabasesResponseBody\hanaDatabases\hanaDatabase;

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
        if (\is_array($this->hanaDatabase)) {
            Model::validateArray($this->hanaDatabase);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hanaDatabase) {
            if (\is_array($this->hanaDatabase)) {
                $res['HanaDatabase'] = [];
                $n1                  = 0;
                foreach ($this->hanaDatabase as $item1) {
                    $res['HanaDatabase'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HanaDatabase'])) {
            if (!empty($map['HanaDatabase'])) {
                $model->hanaDatabase = [];
                $n1                  = 0;
                foreach ($map['HanaDatabase'] as $item1) {
                    $model->hanaDatabase[$n1++] = hanaDatabase::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
