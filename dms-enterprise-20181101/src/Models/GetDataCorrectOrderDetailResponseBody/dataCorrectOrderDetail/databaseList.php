<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\databaseList\database;

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
        if (\is_array($this->database)) {
            Model::validateArray($this->database);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->database) {
            if (\is_array($this->database)) {
                $res['Database'] = [];
                $n1 = 0;
                foreach ($this->database as $item1) {
                    $res['Database'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Database'])) {
            if (!empty($map['Database'])) {
                $model->database = [];
                $n1 = 0;
                foreach ($map['Database'] as $item1) {
                    $model->database[$n1++] = database::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
