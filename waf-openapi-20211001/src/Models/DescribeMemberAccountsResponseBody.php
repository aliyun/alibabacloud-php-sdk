<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeMemberAccountsResponseBody\accountInfos;
use AlibabaCloud\Tea\Model;

class DescribeMemberAccountsResponseBody extends Model
{
    /**
     * @var accountInfos[]
     */
    public $accountInfos;

    /**
     * @example 50C4A80D-D46C-57E0-9A7D-03C078474852
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accountInfos' => 'AccountInfos',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountInfos) {
            $res['AccountInfos'] = [];
            if (null !== $this->accountInfos && \is_array($this->accountInfos)) {
                $n = 0;
                foreach ($this->accountInfos as $item) {
                    $res['AccountInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMemberAccountsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountInfos'])) {
            if (!empty($map['AccountInfos'])) {
                $model->accountInfos = [];
                $n                   = 0;
                foreach ($map['AccountInfos'] as $item) {
                    $model->accountInfos[$n++] = null !== $item ? accountInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
