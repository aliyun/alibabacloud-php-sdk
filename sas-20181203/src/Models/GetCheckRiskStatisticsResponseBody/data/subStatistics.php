<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckRiskStatisticsResponseBody\data;

use AlibabaCloud\Tea\Model;

class subStatistics extends Model
{
    /**
     * @description The name of the baseline type.
     *
     * @example weak_password
     *
     * @var string
     */
    public $alias;

    /**
     * @description The number of high-risk items.
     *
     * @example 3
     *
     * @var int
     */
    public $highWarningCount;

    /**
     * @description The number of low-risk items.
     *
     * @example 0
     *
     * @var int
     */
    public $lowWarningCount;

    /**
     * @description The number of medium-risk items.
     *
     * @example 0
     *
     * @var int
     */
    public $mediumWarningCount;

    /**
     * @description The number of passed check items.
     *
     * @example 2
     *
     * @var int
     */
    public $passCount;

    /**
     * @description The total number of check items.
     *
     * @example 5
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The baseline type.
     *
     * @example weak_password
     *
     * @var string
     */
    public $typeName;
    protected $_name = [
        'alias'              => 'Alias',
        'highWarningCount'   => 'HighWarningCount',
        'lowWarningCount'    => 'LowWarningCount',
        'mediumWarningCount' => 'MediumWarningCount',
        'passCount'          => 'PassCount',
        'totalCount'         => 'TotalCount',
        'typeName'           => 'TypeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->highWarningCount) {
            $res['HighWarningCount'] = $this->highWarningCount;
        }
        if (null !== $this->lowWarningCount) {
            $res['LowWarningCount'] = $this->lowWarningCount;
        }
        if (null !== $this->mediumWarningCount) {
            $res['MediumWarningCount'] = $this->mediumWarningCount;
        }
        if (null !== $this->passCount) {
            $res['PassCount'] = $this->passCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subStatistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['HighWarningCount'])) {
            $model->highWarningCount = $map['HighWarningCount'];
        }
        if (isset($map['LowWarningCount'])) {
            $model->lowWarningCount = $map['LowWarningCount'];
        }
        if (isset($map['MediumWarningCount'])) {
            $model->mediumWarningCount = $map['MediumWarningCount'];
        }
        if (isset($map['PassCount'])) {
            $model->passCount = $map['PassCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        return $model;
    }
}
