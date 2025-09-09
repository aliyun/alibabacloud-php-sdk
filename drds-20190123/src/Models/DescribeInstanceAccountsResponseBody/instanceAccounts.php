<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceAccountsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceAccountsResponseBody\instanceAccounts\instanceAccount;

class instanceAccounts extends Model
{
    /**
     * @var instanceAccount[]
     */
    public $instanceAccount;
    protected $_name = [
        'instanceAccount' => 'InstanceAccount',
    ];

    public function validate()
    {
        if (\is_array($this->instanceAccount)) {
            Model::validateArray($this->instanceAccount);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceAccount) {
            if (\is_array($this->instanceAccount)) {
                $res['InstanceAccount'] = [];
                $n1 = 0;
                foreach ($this->instanceAccount as $item1) {
                    $res['InstanceAccount'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceAccount'])) {
            if (!empty($map['InstanceAccount'])) {
                $model->instanceAccount = [];
                $n1 = 0;
                foreach ($map['InstanceAccount'] as $item1) {
                    $model->instanceAccount[$n1] = instanceAccount::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
