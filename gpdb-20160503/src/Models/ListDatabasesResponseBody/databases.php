<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListDatabasesResponseBody;

use AlibabaCloud\Dara\Model;

class databases extends Model
{
    /**
     * @var string[]
     */
    public $databases;
    protected $_name = [
        'databases' => 'Databases',
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
                $res['Databases'] = [];
                $n1 = 0;
                foreach ($this->databases as $item1) {
                    $res['Databases'][$n1++] = $item1;
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
        if (isset($map['Databases'])) {
            if (!empty($map['Databases'])) {
                $model->databases = [];
                $n1 = 0;
                foreach ($map['Databases'] as $item1) {
                    $model->databases[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
