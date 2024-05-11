<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceLinkedRoleForProductRequest extends Model
{
    /**
     * @description The name of the cloud service or the name of the service-linked role with which the cloud service is associated.
     *
     * This parameter is required.
     * @example AliyunServiceRoleForEventBridgeSendToMNS
     *
     * @var string
     */
    public $productName;
    protected $_name = [
        'productName' => 'ProductName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceLinkedRoleForProductRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        return $model;
    }
}
