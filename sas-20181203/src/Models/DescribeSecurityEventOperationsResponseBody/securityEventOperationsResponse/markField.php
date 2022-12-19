<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationsResponseBody\securityEventOperationsResponse;

use AlibabaCloud\Tea\Model;

class markField extends Model
{
    /**
     * @description The alias of the field that is used in the whitelist rule.
     *
     * @example file path
     *
     * @var string
     */
    public $filedAliasName;

    /**
     * @description The field that is used in the whitelist rule.
     *
     * @example gmtModified
     *
     * @var string
     */
    public $filedName;

    /**
     * @description The operation that is used in the whitelist rule. Valid values:
     *
     *   **contains**: contains
     *   **notContains**: does not contain
     *   **regex**: regular expression
     *   **strEqual**: equals
     *   **strNotEqual**: does not equal
     *
     * @example contains
     *
     * @var string
     */
    public $markMisType;

    /**
     * @description The value of the field that is used in the whitelist rule.
     *
     * @example 2022-04-25 10:11:04
     *
     * @var string
     */
    public $markMisValue;

    /**
     * @description An array consisting of the operations that are supported by the method to add the alert event to the whitelist.
     *
     * @var string[]
     */
    public $supportedMisType;

    /**
     * @description The UUID of the server on which the alert event is detected.
     *
     * @example 3d6b4a75-c28f-447b-9142-38f6252c****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'filedAliasName'   => 'FiledAliasName',
        'filedName'        => 'FiledName',
        'markMisType'      => 'MarkMisType',
        'markMisValue'     => 'MarkMisValue',
        'supportedMisType' => 'SupportedMisType',
        'uuid'             => 'Uuid',
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
        if (null !== $this->markMisType) {
            $res['MarkMisType'] = $this->markMisType;
        }
        if (null !== $this->markMisValue) {
            $res['MarkMisValue'] = $this->markMisValue;
        }
        if (null !== $this->supportedMisType) {
            $res['SupportedMisType'] = $this->supportedMisType;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return markField
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
        if (isset($map['MarkMisType'])) {
            $model->markMisType = $map['MarkMisType'];
        }
        if (isset($map['MarkMisValue'])) {
            $model->markMisValue = $map['MarkMisValue'];
        }
        if (isset($map['SupportedMisType'])) {
            if (!empty($map['SupportedMisType'])) {
                $model->supportedMisType = $map['SupportedMisType'];
            }
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
