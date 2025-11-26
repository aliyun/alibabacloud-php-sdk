<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlAvailableResourceResponseBody\saleControlAvailableResource;

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
        'requestId' => 'RequestId',
        'saleControlAvailableResource' => 'SaleControlAvailableResource',
    ];

    public function validate()
    {
        if (\is_array($this->saleControlAvailableResource)) {
            Model::validateArray($this->saleControlAvailableResource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->saleControlAvailableResource) {
            if (\is_array($this->saleControlAvailableResource)) {
                $res['SaleControlAvailableResource'] = [];
                $n1 = 0;
                foreach ($this->saleControlAvailableResource as $item1) {
                    $res['SaleControlAvailableResource'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['SaleControlAvailableResource'])) {
            if (!empty($map['SaleControlAvailableResource'])) {
                $model->saleControlAvailableResource = [];
                $n1 = 0;
                foreach ($map['SaleControlAvailableResource'] as $item1) {
                    $model->saleControlAvailableResource[$n1] = saleControlAvailableResource::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
