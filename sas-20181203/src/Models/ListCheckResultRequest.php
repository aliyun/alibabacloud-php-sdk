<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListCheckResultRequest extends Model
{
    /**
     * @var string
     */
    public $checkKey;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string[]
     */
    public $instanceTypes;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int[]
     */
    public $requirementIds;

    /**
     * @var string[]
     */
    public $riskLevels;

    /**
     * @var string[]
     */
    public $sortTypes;

    /**
     * @var int[]
     */
    public $standardIds;

    /**
     * @var string[]
     */
    public $statuses;

    /**
     * @var string[]
     */
    public $vendors;
    protected $_name = [
        'checkKey'       => 'CheckKey',
        'currentPage'    => 'CurrentPage',
        'instanceIds'    => 'InstanceIds',
        'instanceTypes'  => 'InstanceTypes',
        'lang'           => 'Lang',
        'pageSize'       => 'PageSize',
        'requirementIds' => 'RequirementIds',
        'riskLevels'     => 'RiskLevels',
        'sortTypes'      => 'SortTypes',
        'standardIds'    => 'StandardIds',
        'statuses'       => 'Statuses',
        'vendors'        => 'Vendors',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkKey) {
            $res['CheckKey'] = $this->checkKey;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = $this->instanceTypes;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requirementIds) {
            $res['RequirementIds'] = $this->requirementIds;
        }
        if (null !== $this->riskLevels) {
            $res['RiskLevels'] = $this->riskLevels;
        }
        if (null !== $this->sortTypes) {
            $res['SortTypes'] = $this->sortTypes;
        }
        if (null !== $this->standardIds) {
            $res['StandardIds'] = $this->standardIds;
        }
        if (null !== $this->statuses) {
            $res['Statuses'] = $this->statuses;
        }
        if (null !== $this->vendors) {
            $res['Vendors'] = $this->vendors;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCheckResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckKey'])) {
            $model->checkKey = $map['CheckKey'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = $map['InstanceTypes'];
            }
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequirementIds'])) {
            if (!empty($map['RequirementIds'])) {
                $model->requirementIds = $map['RequirementIds'];
            }
        }
        if (isset($map['RiskLevels'])) {
            if (!empty($map['RiskLevels'])) {
                $model->riskLevels = $map['RiskLevels'];
            }
        }
        if (isset($map['SortTypes'])) {
            if (!empty($map['SortTypes'])) {
                $model->sortTypes = $map['SortTypes'];
            }
        }
        if (isset($map['StandardIds'])) {
            if (!empty($map['StandardIds'])) {
                $model->standardIds = $map['StandardIds'];
            }
        }
        if (isset($map['Statuses'])) {
            if (!empty($map['Statuses'])) {
                $model->statuses = $map['Statuses'];
            }
        }
        if (isset($map['Vendors'])) {
            if (!empty($map['Vendors'])) {
                $model->vendors = $map['Vendors'];
            }
        }

        return $model;
    }
}
