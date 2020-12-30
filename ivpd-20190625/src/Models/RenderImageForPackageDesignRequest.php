<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivpd\V20190625\Models;

use AlibabaCloud\SDK\Ivpd\V20190625\Models\RenderImageForPackageDesignRequest\elementList;
use AlibabaCloud\Tea\Model;

class RenderImageForPackageDesignRequest extends Model
{
    /**
     * @var string
     */
    public $jobId;

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
     * @var int
     */
    public $targetWidth;

    /**
     * @var int
     */
    public $targetHeight;

    /**
     * @var string
     */
    public $displayType;

    /**
     * @var elementList[]
     */
    public $elementList;
    protected $_name = [
        'jobId'        => 'JobId',
        'modelType'    => 'ModelType',
        'materialType' => 'MaterialType',
        'materialName' => 'MaterialName',
        'category'     => 'Category',
        'targetWidth'  => 'TargetWidth',
        'targetHeight' => 'TargetHeight',
        'displayType'  => 'DisplayType',
        'elementList'  => 'ElementList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
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
        if (null !== $this->targetWidth) {
            $res['TargetWidth'] = $this->targetWidth;
        }
        if (null !== $this->targetHeight) {
            $res['TargetHeight'] = $this->targetHeight;
        }
        if (null !== $this->displayType) {
            $res['DisplayType'] = $this->displayType;
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
     * @return RenderImageForPackageDesignRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
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
        if (isset($map['TargetWidth'])) {
            $model->targetWidth = $map['TargetWidth'];
        }
        if (isset($map['TargetHeight'])) {
            $model->targetHeight = $map['TargetHeight'];
        }
        if (isset($map['DisplayType'])) {
            $model->displayType = $map['DisplayType'];
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
