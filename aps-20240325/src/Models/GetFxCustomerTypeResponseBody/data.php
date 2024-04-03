<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aps\V20240325\Models\GetFxCustomerTypeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $customerType;

    /**
     * @var int
     */
    public $isSub;

    /**
     * @var int
     */
    public $parentId;
    protected $_name = [
        'customerType' => 'CustomerType',
        'isSub'        => 'IsSub',
        'parentId'     => 'ParentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customerType) {
            $res['CustomerType'] = $this->customerType;
        }
        if (null !== $this->isSub) {
            $res['IsSub'] = $this->isSub;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomerType'])) {
            $model->customerType = $map['CustomerType'];
        }
        if (isset($map['IsSub'])) {
            $model->isSub = $map['IsSub'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        return $model;
    }
}
