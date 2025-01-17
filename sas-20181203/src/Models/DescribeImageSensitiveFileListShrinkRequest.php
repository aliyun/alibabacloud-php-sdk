<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeImageSensitiveFileListShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $criteria;
    /**
     * @var string
     */
    public $criteriaType;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var string
     */
    public $imageUuid;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $riskLevel;
    /**
     * @var string
     */
    public $scanRangeShrink;
    protected $_name = [
        'criteria'        => 'Criteria',
        'criteriaType'    => 'CriteriaType',
        'currentPage'     => 'CurrentPage',
        'imageUuid'       => 'ImageUuid',
        'lang'            => 'Lang',
        'pageSize'        => 'PageSize',
        'riskLevel'       => 'RiskLevel',
        'scanRangeShrink' => 'ScanRange',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->criteria) {
            $res['Criteria'] = $this->criteria;
        }

        if (null !== $this->criteriaType) {
            $res['CriteriaType'] = $this->criteriaType;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->imageUuid) {
            $res['ImageUuid'] = $this->imageUuid;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->scanRangeShrink) {
            $res['ScanRange'] = $this->scanRangeShrink;
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
        if (isset($map['Criteria'])) {
            $model->criteria = $map['Criteria'];
        }

        if (isset($map['CriteriaType'])) {
            $model->criteriaType = $map['CriteriaType'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['ImageUuid'])) {
            $model->imageUuid = $map['ImageUuid'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['ScanRange'])) {
            $model->scanRangeShrink = $map['ScanRange'];
        }

        return $model;
    }
}
