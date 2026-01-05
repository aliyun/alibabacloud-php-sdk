<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProductVersionsResponseBody\productVersionDetails;

class ListProductVersionsResponseBody extends Model
{
    /**
     * @var productVersionDetails[]
     */
    public $productVersionDetails;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'productVersionDetails' => 'ProductVersionDetails',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->productVersionDetails)) {
            Model::validateArray($this->productVersionDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productVersionDetails) {
            if (\is_array($this->productVersionDetails)) {
                $res['ProductVersionDetails'] = [];
                $n1 = 0;
                foreach ($this->productVersionDetails as $item1) {
                    $res['ProductVersionDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ProductVersionDetails'])) {
            if (!empty($map['ProductVersionDetails'])) {
                $model->productVersionDetails = [];
                $n1 = 0;
                foreach ($map['ProductVersionDetails'] as $item1) {
                    $model->productVersionDetails[$n1] = productVersionDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
