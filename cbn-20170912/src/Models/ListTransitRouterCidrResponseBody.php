<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterCidrResponseBody\cidrLists;
use AlibabaCloud\Tea\Model;

class ListTransitRouterCidrResponseBody extends Model
{
    /**
     * @description The CIDR blocks of the transit router.
     *
     * @var cidrLists[]
     */
    public $cidrLists;

    /**
     * @description The ID of the request.
     *
     * @example 0876E54E-3E36-5C31-89F0-9EE8A9266F9A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cidrLists' => 'CidrLists',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrLists) {
            $res['CidrLists'] = [];
            if (null !== $this->cidrLists && \is_array($this->cidrLists)) {
                $n = 0;
                foreach ($this->cidrLists as $item) {
                    $res['CidrLists'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListTransitRouterCidrResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrLists'])) {
            if (!empty($map['CidrLists'])) {
                $model->cidrLists = [];
                $n                = 0;
                foreach ($map['CidrLists'] as $item) {
                    $model->cidrLists[$n++] = null !== $item ? cidrLists::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
