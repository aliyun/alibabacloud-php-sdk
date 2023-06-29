<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeCategoryTemplateRuleListResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The description of the rule.
     *
     * @example Rule for identifying ID card numbers
     *
     * @var string
     */
    public $description;

    /**
     * @description The unique ID of the rule.
     *
     * @example 100
     *
     * @var int
     */
    public $id;

    /**
     * @description The IDs of sensitive data types. Multiple IDs are separated by commas (,).
     *
     * @example 1001,1002
     *
     * @var string
     */
    public $identificationRuleIds;

    /**
     * @description The scan scope of the rule. The value is a JSON array of the STRING type. Each element in a JSON array indicates a scan scope that contains the following fields:
     *
     *   **Asset**: the data asset type. Valid values: RDS, DRDS, PolarDB, OTS, ADB, and OceanBase. The value is of the STRING type.
     *
     *   **Content**: the scan scope. The value is of the STRING type. Each element in a JSON array indicates a scan scope that contains the following fields:
     *
     *   **Range**: the matching condition. Valid values: Instance, database, table, column, project, bucket, and object. The value project is valid only for data assets in MaxCompute. The values bucket and object are valid only for data assets in Object Storage Service (OSS). The value of this parameter is of the STRING type.
     *   **Operator**: the operator. Valid values: equals, regex, prefix, and suffix. The operator equals indicates a full match. The operator regex indicates a match by regular expression. The operator prefix indicates a match by prefix. The operator suffix indicates a match by suffix.
     *   **Value**: the matching content. The value is of the STRING type.
     *
     * @example [{"Asset":"RDS","Content":[{"Range":"database","Operator":"regex","Value":"register"}]},{"Asset":"RDS","Content":[{"Range":"table","Operator":"regex","Value":"register"}]},{"Asset":"RDS","Content":[{"Range":"column","Operator":"regex","Value":"register"}]},{"Asset":"ODPS","Content":[{"Range":"project","Operator":"regex","Value":"register"}]},{"Asset":"ODPS","Content":[{"Range":"table","Operator":"regex","Value":"register"}]},{"Asset":"ODPS","Content":[{"Range":"column","Operator":"regex","Value":"register"}]}]
     *
     * @var string
     */
    public $identificationScope;

    /**
     * @description The name of the rule.
     *
     * @example ID card number
     *
     * @var string
     */
    public $name;

    /**
     * @description The sensitivity level of the data that is not compliant with the rule. Valid values: **1** to **11**.
     *
     *   **1**: No sensitive data is detected.
     *   **2**: indicates the S1 sensitivity level.
     *   **3**: indicates the S2 sensitivity level.
     *   **4**: indicates the S3 sensitivity level.
     *   **5**: indicates the S4 sensitivity level.
     *   **6**: indicates the S5 sensitivity level.
     *   **7**: indicates the S6 sensitivity level.
     *   **8**: indicates the S7 sensitivity level.
     *   **9**: indicates the S8 sensitivity level.
     *   **10**: indicates the S9 sensitivity level.
     *   **11**: indicates the S10 sensitivity level.
     *   **null**: indicates all preceding sensitivity levels.
     *
     * @example 2
     *
     * @var int
     */
    public $riskLevelId;

    /**
     * @description The status of the rule. Valid values:
     *
     *   **0**: disabled
     *   **1**: enabled
     *   **null**: all states
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'description'           => 'Description',
        'id'                    => 'Id',
        'identificationRuleIds' => 'IdentificationRuleIds',
        'identificationScope'   => 'IdentificationScope',
        'name'                  => 'Name',
        'riskLevelId'           => 'RiskLevelId',
        'status'                => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->identificationRuleIds) {
            $res['IdentificationRuleIds'] = $this->identificationRuleIds;
        }
        if (null !== $this->identificationScope) {
            $res['IdentificationScope'] = $this->identificationScope;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IdentificationRuleIds'])) {
            $model->identificationRuleIds = $map['IdentificationRuleIds'];
        }
        if (isset($map['IdentificationScope'])) {
            $model->identificationScope = $map['IdentificationScope'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
