<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\ListServiceAccountsResponseBody\serviceAccounts;
use AlibabaCloud\Tea\Model;

class ListServiceAccountsResponseBody extends Model
{
    /**
     * @example 8349374D-0F22-5CAB-9DE3-8CCE8EFA71FF
     *
     * @var string
     */
    public $requestId;

    /**
     * @var serviceAccounts[]
     */
    public $serviceAccounts;
    protected $_name = [
        'requestId'       => 'RequestId',
        'serviceAccounts' => 'ServiceAccounts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceAccounts) {
            $res['ServiceAccounts'] = [];
            if (null !== $this->serviceAccounts && \is_array($this->serviceAccounts)) {
                $n = 0;
                foreach ($this->serviceAccounts as $item) {
                    $res['ServiceAccounts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceAccountsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceAccounts'])) {
            if (!empty($map['ServiceAccounts'])) {
                $model->serviceAccounts = [];
                $n                      = 0;
                foreach ($map['ServiceAccounts'] as $item) {
                    $model->serviceAccounts[$n++] = null !== $item ? serviceAccounts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
