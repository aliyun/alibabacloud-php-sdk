<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceAccountsResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceAccountsResponseBody\instanceAccounts\instanceAccount;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceAccount) {
            $res['InstanceAccount'] = [];
            if (null !== $this->instanceAccount && \is_array($this->instanceAccount)) {
                $n = 0;
                foreach ($this->instanceAccount as $item) {
                    $res['InstanceAccount'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceAccounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceAccount'])) {
            if (!empty($map['InstanceAccount'])) {
                $model->instanceAccount = [];
                $n                      = 0;
                foreach ($map['InstanceAccount'] as $item) {
                    $model->instanceAccount[$n++] = null !== $item ? instanceAccount::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
