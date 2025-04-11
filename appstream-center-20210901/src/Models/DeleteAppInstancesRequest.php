<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class DeleteAppInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @var string[]
     */
    public $appInstanceIds;

    /**
     * @var string
     */
    public $productType;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceIds' => 'AppInstanceIds',
        'productType' => 'ProductType',
    ];

    public function validate()
    {
        if (\is_array($this->appInstanceIds)) {
            Model::validateArray($this->appInstanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }

        if (null !== $this->appInstanceIds) {
            if (\is_array($this->appInstanceIds)) {
                $res['AppInstanceIds'] = [];
                $n1 = 0;
                foreach ($this->appInstanceIds as $item1) {
                    $res['AppInstanceIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
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
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }

        if (isset($map['AppInstanceIds'])) {
            if (!empty($map['AppInstanceIds'])) {
                $model->appInstanceIds = [];
                $n1 = 0;
                foreach ($map['AppInstanceIds'] as $item1) {
                    $model->appInstanceIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        return $model;
    }
}
