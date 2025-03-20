<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\ListIdentityProvidersResponseBody\identityProviders;
use AlibabaCloud\Tea\Model;

class ListIdentityProvidersResponseBody extends Model
{
    /**
     * @var identityProviders[]
     */
    public $identityProviders;

    /**
     * @example 0441BD79-92F3-53AA-8657-F8CE4A2B912A
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'identityProviders' => 'IdentityProviders',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->identityProviders) {
            $res['IdentityProviders'] = [];
            if (null !== $this->identityProviders && \is_array($this->identityProviders)) {
                $n = 0;
                foreach ($this->identityProviders as $item) {
                    $res['IdentityProviders'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIdentityProvidersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdentityProviders'])) {
            if (!empty($map['IdentityProviders'])) {
                $model->identityProviders = [];
                $n = 0;
                foreach ($map['IdentityProviders'] as $item) {
                    $model->identityProviders[$n++] = null !== $item ? identityProviders::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
