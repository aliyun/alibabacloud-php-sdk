<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataImportSQLPreCheckDetailResponseBody;

use AlibabaCloud\Tea\Model;

class preCheckSQLDetailList extends Model
{
    /**
     * @description Indicates whether the precheck of the SQL statement was skipped. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $skip;

    /**
     * @description The SQL ID, which indicates the sequence number of the SQL statement. The number starts with 1.
     *
     * @example 1
     *
     * @var int
     */
    public $sqlId;

    /**
     * @description The type of the SQL statement, such as DELETE, UPDATE, or ALTER_TABLE.
     *
     * @example INSERT
     *
     * @var string
     */
    public $sqlType;

    /**
     * @description The state of the ticket. Valid values:
     *
     *   **INIT**: The ticket was being initialized.
     *   **RUNNING**: The ticket was in progress.
     *   **SUCCESS**: The ticket was complete.
     *   **TIMEOUT**: The ticket was skipped due to timeout.
     *   **FAIL**: The ticket failed.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $statusCode;
    protected $_name = [
        'skip'       => 'Skip',
        'sqlId'      => 'SqlId',
        'sqlType'    => 'SqlType',
        'statusCode' => 'StatusCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->skip) {
            $res['Skip'] = $this->skip;
        }
        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return preCheckSQLDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Skip'])) {
            $model->skip = $map['Skip'];
        }
        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }

        return $model;
    }
}
