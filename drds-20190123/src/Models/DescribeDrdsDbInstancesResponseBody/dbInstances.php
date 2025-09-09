<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbInstancesResponseBody\dbInstances\dbInstance;

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
        if (\is_array($this->dbInstance)) {
            Model::validateArray($this->dbInstance);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbInstance) {
            if (\is_array($this->dbInstance)) {
                $res['DbInstance'] = [];
                $n1 = 0;
                foreach ($this->dbInstance as $item1) {
                    $res['DbInstance'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['DbInstance'])) {
            if (!empty($map['DbInstance'])) {
                $model->dbInstance = [];
                $n1 = 0;
                foreach ($map['DbInstance'] as $item1) {
                    $model->dbInstance[$n1] = dbInstance::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
