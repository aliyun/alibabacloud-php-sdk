<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\ModelInputContentSyncDetectResponseBody\traceInfo\harmfulCategories;

use AlibabaCloud\Dara\Model;

class harmfulCategoryInfoList extends Model
{
    /**
     * @var string
     */
    public $categoryLabel;

    /**
     * @var int
     */
    public $categoryType;

    /**
     * @var int
     */
    public $riskResult;

    /**
     * @var int
     */
    public $securityLevel;

    /**
     * @var string
     */
    public $subCategoryLabel;
    protected $_name = [
        'categoryLabel' => 'CategoryLabel',
        'categoryType' => 'CategoryType',
        'riskResult' => 'RiskResult',
        'securityLevel' => 'SecurityLevel',
        'subCategoryLabel' => 'SubCategoryLabel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryLabel) {
            $res['CategoryLabel'] = $this->categoryLabel;
        }

        if (null !== $this->categoryType) {
            $res['CategoryType'] = $this->categoryType;
        }

        if (null !== $this->riskResult) {
            $res['RiskResult'] = $this->riskResult;
        }

        if (null !== $this->securityLevel) {
            $res['SecurityLevel'] = $this->securityLevel;
        }

        if (null !== $this->subCategoryLabel) {
            $res['SubCategoryLabel'] = $this->subCategoryLabel;
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
        if (isset($map['CategoryLabel'])) {
            $model->categoryLabel = $map['CategoryLabel'];
        }

        if (isset($map['CategoryType'])) {
            $model->categoryType = $map['CategoryType'];
        }

        if (isset($map['RiskResult'])) {
            $model->riskResult = $map['RiskResult'];
        }

        if (isset($map['SecurityLevel'])) {
            $model->securityLevel = $map['SecurityLevel'];
        }

        if (isset($map['SubCategoryLabel'])) {
            $model->subCategoryLabel = $map['SubCategoryLabel'];
        }

        return $model;
    }
}
