<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class ListResourceGroupsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ResourceGroup[]
     */
    public $resourceGroups;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'resourceGroups' => 'ResourceGroups',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->resourceGroups)) {
            Model::validateArray($this->resourceGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroups) {
            if (\is_array($this->resourceGroups)) {
                $res['ResourceGroups'] = [];
                $n1 = 0;
                foreach ($this->resourceGroups as $item1) {
                    $res['ResourceGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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

        if (isset($map['ResourceGroups'])) {
            if (!empty($map['ResourceGroups'])) {
                $model->resourceGroups = [];
                $n1 = 0;
                foreach ($map['ResourceGroups'] as $item1) {
                    $model->resourceGroups[$n1++] = ResourceGroup::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
