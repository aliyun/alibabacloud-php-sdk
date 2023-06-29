<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribePackagesResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The point in time when the MaxCompute package was created. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1536751124000
     *
     * @var int
     */
    public $creationTime;

    /**
     * @description The ID of the package.
     *
     * @example 111111
     *
     * @var int
     */
    public $id;

    /**
     * @description The ID of the instance to which the package belongs.
     *
     * @example 223453332
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The name of the package.
     *
     * @example gxdata
     *
     * @var string
     */
    public $name;

    /**
     * @description The account of the user that owns the package.
     *
     * @example cou-2221
     *
     * @var string
     */
    public $owner;

    /**
     * @description The sensitivity level of the package. Valid values:
     *
     *   **1**: N/A, which indicates that no sensitive data is detected.
     *   **2**: S1, which indicates the low sensitivity level.
     *   **3**: S2, which indicates the medium sensitivity level.
     *   **4**: S3, which indicates the high sensitivity level.
     *   **5**: S4, which indicates the highest sensitivity level.
     *
     * @example 4
     *
     * @var int
     */
    public $riskLevelId;

    /**
     * @description The name of the sensitivity level for the package.
     *
     * @example Highest sensitivity level
     *
     * @var string
     */
    public $riskLevelName;

    /**
     * @description Indicates whether the package contains sensitive data. Valid values:
     *
     *   true: yes
     *   false: no
     *
     * @example true
     *
     * @var bool
     */
    public $sensitive;

    /**
     * @description The total volume of sensitive data in the package. For example, the value can be the total number of sensitive tables in the MaxCompute package.
     *
     * @example 123
     *
     * @var int
     */
    public $sensitiveCount;

    /**
     * @description The total volume of data in the package. For example, the value can be the total number of tables in the MaxCompute package.
     *
     * @example 321
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'creationTime'   => 'CreationTime',
        'id'             => 'Id',
        'instanceId'     => 'InstanceId',
        'name'           => 'Name',
        'owner'          => 'Owner',
        'riskLevelId'    => 'RiskLevelId',
        'riskLevelName'  => 'RiskLevelName',
        'sensitive'      => 'Sensitive',
        'sensitiveCount' => 'SensitiveCount',
        'totalCount'     => 'TotalCount',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }
        if (null !== $this->riskLevelName) {
            $res['RiskLevelName'] = $this->riskLevelName;
        }
        if (null !== $this->sensitive) {
            $res['Sensitive'] = $this->sensitive;
        }
        if (null !== $this->sensitiveCount) {
            $res['SensitiveCount'] = $this->sensitiveCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }
        if (isset($map['RiskLevelName'])) {
            $model->riskLevelName = $map['RiskLevelName'];
        }
        if (isset($map['Sensitive'])) {
            $model->sensitive = $map['Sensitive'];
        }
        if (isset($map['SensitiveCount'])) {
            $model->sensitiveCount = $map['SensitiveCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
