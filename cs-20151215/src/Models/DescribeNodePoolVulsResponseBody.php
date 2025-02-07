<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeNodePoolVulsResponseBody\vulRecords;

class DescribeNodePoolVulsResponseBody extends Model
{
    /**
     * @var vulRecords[]
     */
    public $vulRecords;
    /**
     * @var bool
     */
    public $vulsFixServicePurchased;
    protected $_name = [
        'vulRecords'              => 'vul_records',
        'vulsFixServicePurchased' => 'vuls_fix_service_purchased',
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

        if (null !== $this->vulsFixServicePurchased) {
            $res['vuls_fix_service_purchased'] = $this->vulsFixServicePurchased;
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

        if (isset($map['vuls_fix_service_purchased'])) {
            $model->vulsFixServicePurchased = $map['vuls_fix_service_purchased'];
        }

        return $model;
    }
}
