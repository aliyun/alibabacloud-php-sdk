<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsEipAddressesResponseBody\eipAddresses\eipAddress;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsEipAddressesResponseBody\eipAddresses\eipAddress\operationLocks\lock;

class operationLocks extends Model
{
    /**
     * @var lock[]
     */
    public $lock;
    protected $_name = [
        'lock' => 'Lock',
    ];

    public function validate()
    {
        if (\is_array($this->lock)) {
            Model::validateArray($this->lock);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lock) {
            if (\is_array($this->lock)) {
                $res['Lock'] = [];
                $n1 = 0;
                foreach ($this->lock as $item1) {
                    $res['Lock'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Lock'])) {
            if (!empty($map['Lock'])) {
                $model->lock = [];
                $n1 = 0;
                foreach ($map['Lock'] as $item1) {
                    $model->lock[$n1] = lock::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
