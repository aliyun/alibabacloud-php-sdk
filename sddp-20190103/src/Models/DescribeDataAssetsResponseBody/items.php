<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataAssetsResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The access control list (ACL) that controls the access permissions on the OSS bucket.
     *
     * > This parameter is returned only when you set the parameter **RangeId** to **21**.
     * @example private
     *
     * @var string
     */
    public $acl;

    /**
     * @description The time when the data asset was created. Unit: milliseconds.
     *
     * @example 1536751124000
     *
     * @var int
     */
    public $creationTime;

    /**
     * @description The data type of the data asset.
     *
     * @example OSS_BUCKET
     *
     * @var string
     */
    public $dataType;

    /**
     * @description The ID of the data asset.
     *
     * @example 268
     *
     * @var string
     */
    public $id;

    /**
     * @description The sensitivity tag of the data. The value is fixed as **0**. **0**, **1**, **2**, or **3** is returned for this parameter only when you set the parameter **RangeId** to **1**.
     *
     *   **0**: unclassified
     *   **1**: confidential
     *   **2**: sensitive
     *   **3**: highly sensitive
     *
     * @example 0
     *
     * @var bool
     */
    public $labelsec;

    /**
     * @description The name of the data asset.
     *
     * @example gxdata
     *
     * @var string
     */
    public $name;

    /**
     * @description The key value of the OSS object.
     *
     * > This parameter is returned only when you set the parameter **RangeId** to **22**.
     * @example Internal
     *
     * @var string
     */
    public $objectKey;

    /**
     * @description The sensitivity level of the MaxCompute data asset. Valid values:
     *
     *   **S1**: low sensitivity level
     *   **S2**: medium sensitivity level
     *   **S3**: high sensitivity level
     *   **S4**: highest sensitivity level
     *
     * > This parameter is returned only when you set the parameter **RangeId** to **1**.
     * @example S4
     *
     * @var string
     */
    public $odpsRiskLevelName;

    /**
     * @description The account that owns the data asset.
     *
     * @example dtdep-239-******
     *
     * @var string
     */
    public $owner;

    /**
     * @description The name of the service to which the data asset belongs.
     *
     * @example RDS
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The ID of the service to which the data asset belongs. Valid values:
     *
     *   **1**: MaxCompute
     *   **2**: OSS
     *   **3**: AnalyticDB for MySQL
     *   **4**: Tablestore
     *   **5**: ApsaraDB RDS
     *
     * @example 5
     *
     * @var string
     */
    public $productId;

    /**
     * @description Indicates whether the data protection mechanism is enabled for the data asset. The value is fixed as **false**. **true** or **false** is returned for this parameter only when you set the parameter **RangeId** to **1**.
     *
     *   **false**: The data protection mechanism is disabled.
     *   **true**: The data protection mechanism is enabled. Only data inbound is supported. Data outbound is not supported.
     *
     * @example false
     *
     * @var bool
     */
    public $protection;

    /**
     * @description The sensitivity level of the data asset. A higher sensitivity level indicates that the identified data is more sensitive. Valid values:
     *
     *   **1**: No sensitive data is identified.
     *   **2**: sensitive data at level 1.
     *   **3**: sensitive data at level 2.
     *   **3**: sensitive data at level 3.
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
     * @example Medium sensitivity level
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
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $sensitive;

    /**
     * @description The total number of sensitive data assets. For example, the value can be the total number of sensitive MaxCompute projects, packages, or tables, the total number of sensitive ApsaraDB RDS databases or tables, or the total number of sensitive OSS buckets or objects.
     *
     * @example 24
     *
     * @var int
     */
    public $sensitiveCount;

    /**
     * @description The percentage of sensitive data in all data assets.
     *
     * @example 45%
     *
     * @var string
     */
    public $sensitiveRatio;

    /**
     * @description The total number of data assets. For example, the value can be the total number of MaxCompute projects, packages, or tables, the total number of ApsaraDB RDS databases or tables, or the total number of OSS buckets or objects.
     *
     * @example 432
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'acl'               => 'Acl',
        'creationTime'      => 'CreationTime',
        'dataType'          => 'DataType',
        'id'                => 'Id',
        'labelsec'          => 'Labelsec',
        'name'              => 'Name',
        'objectKey'         => 'ObjectKey',
        'odpsRiskLevelName' => 'OdpsRiskLevelName',
        'owner'             => 'Owner',
        'productCode'       => 'ProductCode',
        'productId'         => 'ProductId',
        'protection'        => 'Protection',
        'riskLevelId'       => 'RiskLevelId',
        'riskLevelName'     => 'RiskLevelName',
        'ruleName'          => 'RuleName',
        'sensitive'         => 'Sensitive',
        'sensitiveCount'    => 'SensitiveCount',
        'sensitiveRatio'    => 'SensitiveRatio',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acl) {
            $res['Acl'] = $this->acl;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->labelsec) {
            $res['Labelsec'] = $this->labelsec;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->objectKey) {
            $res['ObjectKey'] = $this->objectKey;
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
        if (null !== $this->sensitiveRatio) {
            $res['SensitiveRatio'] = $this->sensitiveRatio;
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
        if (isset($map['Acl'])) {
            $model->acl = $map['Acl'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Labelsec'])) {
            $model->labelsec = $map['Labelsec'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ObjectKey'])) {
            $model->objectKey = $map['ObjectKey'];
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
        if (isset($map['SensitiveRatio'])) {
            $model->sensitiveRatio = $map['SensitiveRatio'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
