<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\ListServiceAccountsResponseBody\serviceAccounts;

class ListServiceAccountsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var serviceAccounts[]
     */
    public $serviceAccounts;
    protected $_name = [
        'requestId' => 'RequestId',
        'serviceAccounts' => 'ServiceAccounts',
    ];

    public function validate()
    {
        if (\is_array($this->serviceAccounts)) {
            Model::validateArray($this->serviceAccounts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serviceAccounts) {
            if (\is_array($this->serviceAccounts)) {
                $res['ServiceAccounts'] = [];
                $n1 = 0;
                foreach ($this->serviceAccounts as $item1) {
                    $res['ServiceAccounts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ServiceAccounts'])) {
            if (!empty($map['ServiceAccounts'])) {
                $model->serviceAccounts = [];
                $n1 = 0;
                foreach ($map['ServiceAccounts'] as $item1) {
                    $model->serviceAccounts[$n1] = serviceAccounts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
