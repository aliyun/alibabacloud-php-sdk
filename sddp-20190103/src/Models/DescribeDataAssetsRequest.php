<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeDataAssetsRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $riskLevels;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var int
     */
    public $rangeId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $currentPage;
    protected $_name = [
        'lang'        => 'Lang',
        'name'        => 'Name',
        'riskLevels'  => 'RiskLevels',
        'ruleId'      => 'RuleId',
        'rangeId'     => 'RangeId',
        'pageSize'    => 'PageSize',
        'currentPage' => 'CurrentPage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->riskLevels) {
            $res['RiskLevels'] = $this->riskLevels;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->rangeId) {
            $res['RangeId'] = $this->rangeId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataAssetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RiskLevels'])) {
            $model->riskLevels = $map['RiskLevels'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RangeId'])) {
            $model->rangeId = $map['RangeId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        return $model;
    }
}
