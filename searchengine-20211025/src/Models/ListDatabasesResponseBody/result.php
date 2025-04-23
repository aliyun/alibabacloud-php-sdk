<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDatabasesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDatabasesResponseBody\result\databases;

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
        if (\is_array($this->databases)) {
            Model::validateArray($this->databases);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databases) {
            if (\is_array($this->databases)) {
                $res['databases'] = [];
                $n1 = 0;
                foreach ($this->databases as $item1) {
                    $res['databases'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['databases'])) {
            if (!empty($map['databases'])) {
                $model->databases = [];
                $n1 = 0;
                foreach ($map['databases'] as $item1) {
                    $model->databases[$n1++] = databases::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
