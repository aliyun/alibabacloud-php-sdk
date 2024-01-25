<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\SDK\Adp\V20210720\Models\AddEnvironmentProductVersionsRequest\productVersionInfoList;
use AlibabaCloud\Tea\Model;

class AddEnvironmentProductVersionsRequest extends Model
{
    /**
     * @var productVersionInfoList[]
     */
    public $productVersionInfoList;

    /**
     * @var string[]
     */
    public $productVersionUIDList;
    protected $_name = [
        'productVersionInfoList' => 'productVersionInfoList',
        'productVersionUIDList'  => 'productVersionUIDList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productVersionInfoList) {
            $res['productVersionInfoList'] = [];
            if (null !== $this->productVersionInfoList && \is_array($this->productVersionInfoList)) {
                $n = 0;
                foreach ($this->productVersionInfoList as $item) {
                    $res['productVersionInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->productVersionUIDList) {
            $res['productVersionUIDList'] = $this->productVersionUIDList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddEnvironmentProductVersionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['productVersionInfoList'])) {
            if (!empty($map['productVersionInfoList'])) {
                $model->productVersionInfoList = [];
                $n                             = 0;
                foreach ($map['productVersionInfoList'] as $item) {
                    $model->productVersionInfoList[$n++] = null !== $item ? productVersionInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['productVersionUIDList'])) {
            if (!empty($map['productVersionUIDList'])) {
                $model->productVersionUIDList = $map['productVersionUIDList'];
            }
        }

        return $model;
    }
}
