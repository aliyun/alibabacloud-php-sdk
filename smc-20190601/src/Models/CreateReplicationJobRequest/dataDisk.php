<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\CreateReplicationJobRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smc\V20190601\Models\CreateReplicationJobRequest\dataDisk\part;

class dataDisk extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var part[]
     */
    public $part;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'index' => 'Index',
        'part' => 'Part',
        'size' => 'Size',
    ];

    public function validate()
    {
        if (\is_array($this->part)) {
            Model::validateArray($this->part);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->part) {
            if (\is_array($this->part)) {
                $res['Part'] = [];
                $n1 = 0;
                foreach ($this->part as $item1) {
                    $res['Part'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['Part'])) {
            if (!empty($map['Part'])) {
                $model->part = [];
                $n1 = 0;
                foreach ($map['Part'] as $item1) {
                    $model->part[$n1] = part::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
