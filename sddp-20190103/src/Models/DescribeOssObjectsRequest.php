<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeOssObjectsRequest extends Model
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
     * @var int
     */
    public $riskLevelId;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $serviceRegionId;

    /**
     * @var int
     */
    public $lastScanTimeStart;

    /**
     * @var int
     */
    public $lastScanTimeEnd;
    protected $_name = [
        'lang'              => 'Lang',
        'name'              => 'Name',
        'riskLevelId'       => 'RiskLevelId',
        'ruleId'            => 'RuleId',
        'instanceId'        => 'InstanceId',
        'pageSize'          => 'PageSize',
        'currentPage'       => 'CurrentPage',
        'serviceRegionId'   => 'ServiceRegionId',
        'lastScanTimeStart' => 'LastScanTimeStart',
        'lastScanTimeEnd'   => 'LastScanTimeEnd',
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
        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->serviceRegionId) {
            $res['ServiceRegionId'] = $this->serviceRegionId;
        }
        if (null !== $this->lastScanTimeStart) {
            $res['LastScanTimeStart'] = $this->lastScanTimeStart;
        }
        if (null !== $this->lastScanTimeEnd) {
            $res['LastScanTimeEnd'] = $this->lastScanTimeEnd;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOssObjectsRequest
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
        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['ServiceRegionId'])) {
            $model->serviceRegionId = $map['ServiceRegionId'];
        }
        if (isset($map['LastScanTimeStart'])) {
            $model->lastScanTimeStart = $map['LastScanTimeStart'];
        }
        if (isset($map['LastScanTimeEnd'])) {
            $model->lastScanTimeEnd = $map['LastScanTimeEnd'];
        }

        return $model;
    }
}
