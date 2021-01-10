<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListOpenAccountsResponseBody\openAccounts;
use AlibabaCloud\Tea\Model;

class ListOpenAccountsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var openAccounts[]
     */
    public $openAccounts;
    protected $_name = [
        'requestId'    => 'RequestId',
        'openAccounts' => 'OpenAccounts',
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
        if (null !== $this->openAccounts) {
            $res['OpenAccounts'] = [];
            if (null !== $this->openAccounts && \is_array($this->openAccounts)) {
                $n = 0;
                foreach ($this->openAccounts as $item) {
                    $res['OpenAccounts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOpenAccountsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OpenAccounts'])) {
            if (!empty($map['OpenAccounts'])) {
                $model->openAccounts = [];
                $n                   = 0;
                foreach ($map['OpenAccounts'] as $item) {
                    $model->openAccounts[$n++] = null !== $item ? openAccounts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
