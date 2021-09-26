<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribePackagesResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $creationTime;

    /**
     * @var bool
     */
    public $sensitive;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $riskLevelName;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $sensitiveCount;

    /**
     * @var int
     */
    public $riskLevelId;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'creationTime'   => 'CreationTime',
        'sensitive'      => 'Sensitive',
        'owner'          => 'Owner',
        'riskLevelName'  => 'RiskLevelName',
        'instanceId'     => 'InstanceId',
        'totalCount'     => 'TotalCount',
        'name'           => 'Name',
        'sensitiveCount' => 'SensitiveCount',
        'riskLevelId'    => 'RiskLevelId',
        'id'             => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->sensitive) {
            $res['Sensitive'] = $this->sensitive;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->riskLevelName) {
            $res['RiskLevelName'] = $this->riskLevelName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sensitiveCount) {
            $res['SensitiveCount'] = $this->sensitiveCount;
        }
        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Sensitive'])) {
            $model->sensitive = $map['Sensitive'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['RiskLevelName'])) {
            $model->riskLevelName = $map['RiskLevelName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SensitiveCount'])) {
            $model->sensitiveCount = $map['SensitiveCount'];
        }
        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
