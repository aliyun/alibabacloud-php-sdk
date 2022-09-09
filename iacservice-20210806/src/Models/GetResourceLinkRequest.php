<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Tea\Model;

class GetResourceLinkRequest extends Model
{
    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $resourceTypeCode;
    protected $_name = [
        'productCode'      => 'productCode',
        'resourceTypeCode' => 'resourceTypeCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productCode) {
            $res['productCode'] = $this->productCode;
        }
        if (null !== $this->resourceTypeCode) {
            $res['resourceTypeCode'] = $this->resourceTypeCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourceLinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['productCode'])) {
            $model->productCode = $map['productCode'];
        }
        if (isset($map['resourceTypeCode'])) {
            $model->resourceTypeCode = $map['resourceTypeCode'];
        }

        return $model;
    }
}
