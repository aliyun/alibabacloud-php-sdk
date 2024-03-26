<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResellerTrade\V20191227\Models\SaveActivityShrinkRequest\fusionPromotionParamList;

use AlibabaCloud\Tea\Model;

class moduleInfoParamList extends Model
{
    /**
     * @var string
     */
    public $componentCode;

    /**
     * @var string
     */
    public $itemCode;

    /**
     * @var int
     */
    public $moduleId;

    /**
     * @var string
     */
    public $moduleKey;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var string[]
     */
    public $moduleValueList;

    /**
     * @var int
     */
    public $pricePlanId;
    protected $_name = [
        'componentCode'   => 'componentCode',
        'itemCode'        => 'itemCode',
        'moduleId'        => 'moduleId',
        'moduleKey'       => 'moduleKey',
        'moduleName'      => 'moduleName',
        'moduleValueList' => 'moduleValueList',
        'pricePlanId'     => 'pricePlanId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentCode) {
            $res['componentCode'] = $this->componentCode;
        }
        if (null !== $this->itemCode) {
            $res['itemCode'] = $this->itemCode;
        }
        if (null !== $this->moduleId) {
            $res['moduleId'] = $this->moduleId;
        }
        if (null !== $this->moduleKey) {
            $res['moduleKey'] = $this->moduleKey;
        }
        if (null !== $this->moduleName) {
            $res['moduleName'] = $this->moduleName;
        }
        if (null !== $this->moduleValueList) {
            $res['moduleValueList'] = $this->moduleValueList;
        }
        if (null !== $this->pricePlanId) {
            $res['pricePlanId'] = $this->pricePlanId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moduleInfoParamList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['componentCode'])) {
            $model->componentCode = $map['componentCode'];
        }
        if (isset($map['itemCode'])) {
            $model->itemCode = $map['itemCode'];
        }
        if (isset($map['moduleId'])) {
            $model->moduleId = $map['moduleId'];
        }
        if (isset($map['moduleKey'])) {
            $model->moduleKey = $map['moduleKey'];
        }
        if (isset($map['moduleName'])) {
            $model->moduleName = $map['moduleName'];
        }
        if (isset($map['moduleValueList'])) {
            if (!empty($map['moduleValueList'])) {
                $model->moduleValueList = $map['moduleValueList'];
            }
        }
        if (isset($map['pricePlanId'])) {
            $model->pricePlanId = $map['pricePlanId'];
        }

        return $model;
    }
}
