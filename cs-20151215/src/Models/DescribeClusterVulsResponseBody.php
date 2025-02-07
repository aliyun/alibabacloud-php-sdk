<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterVulsResponseBody\vulRecords;

class DescribeClusterVulsResponseBody extends Model
{
    /**
     * @var vulRecords[]
     */
    public $vulRecords;
    protected $_name = [
        'vulRecords' => 'vul_records',
    ];

    public function validate()
    {
        if (\is_array($this->vulRecords)) {
            Model::validateArray($this->vulRecords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vulRecords) {
            if (\is_array($this->vulRecords)) {
                $res['vul_records'] = [];
                $n1                 = 0;
                foreach ($this->vulRecords as $item1) {
                    $res['vul_records'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['vul_records'])) {
            if (!empty($map['vul_records'])) {
                $model->vulRecords = [];
                $n1                = 0;
                foreach ($map['vul_records'] as $item1) {
                    $model->vulRecords[$n1++] = vulRecords::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
