<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveDataAuditLogResponseBody\sensitiveDataAuditLogList;

use AlibabaCloud\Tea\Model;

class sensitiveDataLog extends Model
{
    /**
     * @description The name of the column that contains sensitive data.
     *
     * @example ExampleColumnName
     *
     * @var string
     */
    public $columnName;

    /**
     * @description The permission that the user has on the column. Valid values:
     *
     *   **No permission**
     *   **Partial redaction**
     *   **Plaintext**
     *   **Change**
     *   **Enable data masking**
     *   **Disable data masking**
     *
     * @example Change
     *
     * @var string
     */
    public $columnPermissionType;

    /**
     * @description The algorithm used for data masking.
     *
     * @example Default - Full redaction
     *
     * @var string
     */
    public $desensitizationRule;

    /**
     * @description The sensitivity level of the data. Valid values:
     *
     *   **Low**
     *   **Medium**
     *   **High**
     *
     * @example Low
     *
     * @var string
     */
    public $securityLevel;

    /**
     * @description The name of the table that stores the sensitive data.
     *
     * @example ExampleTableName
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'columnName'           => 'ColumnName',
        'columnPermissionType' => 'ColumnPermissionType',
        'desensitizationRule'  => 'DesensitizationRule',
        'securityLevel'        => 'SecurityLevel',
        'tableName'            => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->columnPermissionType) {
            $res['ColumnPermissionType'] = $this->columnPermissionType;
        }
        if (null !== $this->desensitizationRule) {
            $res['DesensitizationRule'] = $this->desensitizationRule;
        }
        if (null !== $this->securityLevel) {
            $res['SecurityLevel'] = $this->securityLevel;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sensitiveDataLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['ColumnPermissionType'])) {
            $model->columnPermissionType = $map['ColumnPermissionType'];
        }
        if (isset($map['DesensitizationRule'])) {
            $model->desensitizationRule = $map['DesensitizationRule'];
        }
        if (isset($map['SecurityLevel'])) {
            $model->securityLevel = $map['SecurityLevel'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
