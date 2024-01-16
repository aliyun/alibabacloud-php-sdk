<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeInstancesResponseBody;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeInstancesResponseBody\items\modelTags;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The time when the data asset was created. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1637226782000
     *
     * @var int
     */
    public $creationTime;

    /**
     * @description The name of the department to which the data asset belongs.
     *
     * @example ***DemoCenter
     *
     * @var string
     */
    public $departName;

    /**
     * @description The unique ID of the data asset in DSC.
     *
     * @example 11111
     *
     * @var int
     */
    public $id;

    /**
     * @description The description of the data asset.
     *
     * @example Data asset Information 1
     *
     * @var string
     */
    public $instanceDescription;

    /**
     * @description The security status of the data asset. Valid values:
     *
     *   **true**: The data asset is secure.
     *   **false**: The data asset is insecure.
     *
     * @example true
     *
     * @var bool
     */
    public $labelsec;

    /**
     * @description The time when the data asset was last scanned. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1637622793000
     *
     * @var int
     */
    public $lastFinishTime;

    /**
     * @description A list of tags.
     *
     * @var modelTags[]
     */
    public $modelTags;

    /**
     * @description The name of the data asset.
     *
     * @example gxdata
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is deprecated.
     *
     * @example 1
     *
     * @var string
     */
    public $odpsRiskLevelName;

    /**
     * @description The Alibaba Cloud account to which the data asset belongs.
     *
     * @example dtdep-239-******
     *
     * @var string
     */
    public $owner;

    /**
     * @description The name of the service to which the data asset belongs, such as MaxCompute, OSS, and ApsaraDB RDS. For more information about the types of data assets that DSC can scan to detect sensitive data, see [Supported data assets](~~212906~~).
     *
     * @example RDS
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The ID of the service to which the data asset belongs.
     *
     * @example 5
     *
     * @var string
     */
    public $productId;

    /**
     * @description The protection status of the data asset. Valid values:
     *
     *   **true**: The data asset is being protected.
     *   **false**: The data asset is not protected.
     *
     * @example false
     *
     * @var bool
     */
    public $protection;

    /**
     * @description The ID of the sensitivity level for the data asset. A higher sensitivity level ID indicates that the identified data is more sensitive.
     *
     *   **1**: No sensitive data is detected.
     *   **2**: sensitive data at level 1.
     *   **3**: sensitive data at level 2.
     *   **4**: sensitive data at level 3.
     *   **5**: sensitive data at level 4.
     *   **6**: sensitive data at level 5.
     *   **7**: sensitive data at level 6.
     *   **8**: sensitive data at level 7.
     *   **9**: sensitive data at level 8.
     *   **10**: sensitive data at level 9.
     *   **11**: sensitive data at level 10.
     *
     * @example 2
     *
     * @var int
     */
    public $riskLevelId;

    /**
     * @description The name of the sensitivity level for the data asset.
     *
     * @example Sensitive data at level 1
     *
     * @var string
     */
    public $riskLevelName;

    /**
     * @description The name of the sensitive data detection rule that the data asset hits.
     *
     * @example \*\*\* rule
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description Indicates whether the data asset contains sensitive data. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $sensitive;

    /**
     * @description The number of sensitive data objects in the data asset. For example, if the data asset is an ApsaraDB RDS instance, the value indicates the number of sensitive tables in all databases of the instance.
     *
     * @example 123
     *
     * @var int
     */
    public $sensitiveCount;

    /**
     * @description The name of the tenant.
     *
     * @example Tenant 1
     *
     * @var string
     */
    public $tenantName;

    /**
     * @description The total number of data objects in the data asset. For example, if the data asset is an ApsaraDB RDS instance, the value indicates the total number of tables in all databases of the instance.
     *
     * @example 231
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'creationTime'        => 'CreationTime',
        'departName'          => 'DepartName',
        'id'                  => 'Id',
        'instanceDescription' => 'InstanceDescription',
        'labelsec'            => 'Labelsec',
        'lastFinishTime'      => 'LastFinishTime',
        'modelTags'           => 'ModelTags',
        'name'                => 'Name',
        'odpsRiskLevelName'   => 'OdpsRiskLevelName',
        'owner'               => 'Owner',
        'productCode'         => 'ProductCode',
        'productId'           => 'ProductId',
        'protection'          => 'Protection',
        'riskLevelId'         => 'RiskLevelId',
        'riskLevelName'       => 'RiskLevelName',
        'ruleName'            => 'RuleName',
        'sensitive'           => 'Sensitive',
        'sensitiveCount'      => 'SensitiveCount',
        'tenantName'          => 'TenantName',
        'totalCount'          => 'TotalCount',
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
        if (null !== $this->departName) {
            $res['DepartName'] = $this->departName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }
        if (null !== $this->labelsec) {
            $res['Labelsec'] = $this->labelsec;
        }
        if (null !== $this->lastFinishTime) {
            $res['LastFinishTime'] = $this->lastFinishTime;
        }
        if (null !== $this->modelTags) {
            $res['ModelTags'] = [];
            if (null !== $this->modelTags && \is_array($this->modelTags)) {
                $n = 0;
                foreach ($this->modelTags as $item) {
                    $res['ModelTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->odpsRiskLevelName) {
            $res['OdpsRiskLevelName'] = $this->odpsRiskLevelName;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->protection) {
            $res['Protection'] = $this->protection;
        }
        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }
        if (null !== $this->riskLevelName) {
            $res['RiskLevelName'] = $this->riskLevelName;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->sensitive) {
            $res['Sensitive'] = $this->sensitive;
        }
        if (null !== $this->sensitiveCount) {
            $res['SensitiveCount'] = $this->sensitiveCount;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
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
        if (isset($map['DepartName'])) {
            $model->departName = $map['DepartName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }
        if (isset($map['Labelsec'])) {
            $model->labelsec = $map['Labelsec'];
        }
        if (isset($map['LastFinishTime'])) {
            $model->lastFinishTime = $map['LastFinishTime'];
        }
        if (isset($map['ModelTags'])) {
            if (!empty($map['ModelTags'])) {
                $model->modelTags = [];
                $n                = 0;
                foreach ($map['ModelTags'] as $item) {
                    $model->modelTags[$n++] = null !== $item ? modelTags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OdpsRiskLevelName'])) {
            $model->odpsRiskLevelName = $map['OdpsRiskLevelName'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['Protection'])) {
            $model->protection = $map['Protection'];
        }
        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }
        if (isset($map['RiskLevelName'])) {
            $model->riskLevelName = $map['RiskLevelName'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Sensitive'])) {
            $model->sensitive = $map['Sensitive'];
        }
        if (isset($map['SensitiveCount'])) {
            $model->sensitiveCount = $map['SensitiveCount'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
