<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlAvailableResourceResponseBody\saleControlAvailableResource;
use AlibabaCloud\Tea\Model;

class DescribeEnsSaleControlAvailableResourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var saleControlAvailableResource[]
     */
    public $saleControlAvailableResource;
    protected $_name = [
        'requestId'                    => 'RequestId',
        'saleControlAvailableResource' => 'SaleControlAvailableResource',
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
        if (null !== $this->saleControlAvailableResource) {
            $res['SaleControlAvailableResource'] = [];
            if (null !== $this->saleControlAvailableResource && \is_array($this->saleControlAvailableResource)) {
                $n = 0;
                foreach ($this->saleControlAvailableResource as $item) {
                    $res['SaleControlAvailableResource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEnsSaleControlAvailableResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SaleControlAvailableResource'])) {
            if (!empty($map['SaleControlAvailableResource'])) {
                $model->saleControlAvailableResource = [];
                $n                                   = 0;
                foreach ($map['SaleControlAvailableResource'] as $item) {
                    $model->saleControlAvailableResource[$n++] = null !== $item ? saleControlAvailableResource::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
