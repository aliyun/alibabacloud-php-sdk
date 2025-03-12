<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\AdvanceSecurityEventOperationsResponseBody\securityEventOperationsResponse;

use AlibabaCloud\Tea\Model;

class markFieldsSource extends Model
{
    /**
     * @description The alias of the field that can be used in the whitelist rule.
     *
     * @example file path
     *
     * @var string
     */
    public $filedAliasName;

    /**
     * @description The field that can be used in the whitelist rule.
     *
     * @example filePath
     *
     * @var string
     */
    public $filedName;

    /**
     * @description The value of the field that can be used in the whitelist rule.
     *
     * @example contains
     *
     * @var string
     */
    public $markMisValue;

    /**
     * @description The operation that is supported in the whitelist rule. Valid values:
     *
     *   **contains**: contains
     *   **notContains**: does not contain
     *   **regex**: regular expression
     *   **strEqual**: equals
     *   **strNotEqual**: does not equal
     *
     * @var string[]
     */
    public $supportedMisType;
    protected $_name = [
        'filedAliasName'   => 'FiledAliasName',
        'filedName'        => 'FiledName',
        'markMisValue'     => 'MarkMisValue',
        'supportedMisType' => 'SupportedMisType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filedAliasName) {
            $res['FiledAliasName'] = $this->filedAliasName;
        }
        if (null !== $this->filedName) {
            $res['FiledName'] = $this->filedName;
        }
        if (null !== $this->markMisValue) {
            $res['MarkMisValue'] = $this->markMisValue;
        }
        if (null !== $this->supportedMisType) {
            $res['SupportedMisType'] = $this->supportedMisType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return markFieldsSource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FiledAliasName'])) {
            $model->filedAliasName = $map['FiledAliasName'];
        }
        if (isset($map['FiledName'])) {
            $model->filedName = $map['FiledName'];
        }
        if (isset($map['MarkMisValue'])) {
            $model->markMisValue = $map['MarkMisValue'];
        }
        if (isset($map['SupportedMisType'])) {
            if (!empty($map['SupportedMisType'])) {
                $model->supportedMisType = $map['SupportedMisType'];
            }
        }

        return $model;
    }
}
