<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTableListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTableListResponseBody\routerTableList\routerTableListType;

class routerTableList extends Model
{
    /**
     * @var routerTableListType[]
     */
    public $routerTableListType;
    protected $_name = [
        'routerTableListType' => 'RouterTableListType',
    ];

    public function validate()
    {
        if (\is_array($this->routerTableListType)) {
            Model::validateArray($this->routerTableListType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->routerTableListType) {
            if (\is_array($this->routerTableListType)) {
                $res['RouterTableListType'] = [];
                $n1                         = 0;
                foreach ($this->routerTableListType as $item1) {
                    $res['RouterTableListType'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RouterTableListType'])) {
            if (!empty($map['RouterTableListType'])) {
                $model->routerTableListType = [];
                $n1                         = 0;
                foreach ($map['RouterTableListType'] as $item1) {
                    $model->routerTableListType[$n1++] = routerTableListType::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
