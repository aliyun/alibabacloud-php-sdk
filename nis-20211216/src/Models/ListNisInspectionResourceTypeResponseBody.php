<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nis\V20211216\Models\ListNisInspectionResourceTypeResponseBody\resourceTypeList;

class ListNisInspectionResourceTypeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceTypeList[]
     */
    public $resourceTypeList;
    protected $_name = [
        'requestId' => 'RequestId',
        'resourceTypeList' => 'ResourceTypeList',
    ];

    public function validate()
    {
        if (\is_array($this->resourceTypeList)) {
            Model::validateArray($this->resourceTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceTypeList) {
            if (\is_array($this->resourceTypeList)) {
                $res['ResourceTypeList'] = [];
                $n1 = 0;
                foreach ($this->resourceTypeList as $item1) {
                    $res['ResourceTypeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['ResourceTypeList'])) {
            if (!empty($map['ResourceTypeList'])) {
                $model->resourceTypeList = [];
                $n1 = 0;
                foreach ($map['ResourceTypeList'] as $item1) {
                    $model->resourceTypeList[$n1++] = resourceTypeList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
