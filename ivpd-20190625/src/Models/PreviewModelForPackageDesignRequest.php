<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivpd\V20190625\Models;

use AlibabaCloud\SDK\Ivpd\V20190625\Models\PreviewModelForPackageDesignRequest\elementList;
use AlibabaCloud\Tea\Model;

class PreviewModelForPackageDesignRequest extends Model
{
    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var string
     */
    public $materialType;

    /**
     * @var string
     */
    public $materialName;

    /**
     * @var string
     */
    public $category;

    /**
     * @var elementList[]
     */
    public $elementList;
    protected $_name = [
        'dataId'       => 'DataId',
        'modelType'    => 'ModelType',
        'materialType' => 'MaterialType',
        'materialName' => 'MaterialName',
        'category'     => 'Category',
        'elementList'  => 'ElementList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
        }
        if (null !== $this->materialType) {
            $res['MaterialType'] = $this->materialType;
        }
        if (null !== $this->materialName) {
            $res['MaterialName'] = $this->materialName;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->elementList) {
            $res['ElementList'] = [];
            if (null !== $this->elementList && \is_array($this->elementList)) {
                $n = 0;
                foreach ($this->elementList as $item) {
                    $res['ElementList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PreviewModelForPackageDesignRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }
        if (isset($map['MaterialType'])) {
            $model->materialType = $map['MaterialType'];
        }
        if (isset($map['MaterialName'])) {
            $model->materialName = $map['MaterialName'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ElementList'])) {
            if (!empty($map['ElementList'])) {
                $model->elementList = [];
                $n                  = 0;
                foreach ($map['ElementList'] as $item) {
                    $model->elementList[$n++] = null !== $item ? elementList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
