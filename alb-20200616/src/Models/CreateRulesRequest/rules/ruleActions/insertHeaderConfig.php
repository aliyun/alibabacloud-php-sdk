<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleActions;

use AlibabaCloud\Tea\Model;

class insertHeaderConfig extends Model
{
    /**
     * @description The hostname to which requests are distributed. Valid values:
     *
     *   **${host}** (default): If you set the value to ${host}, you cannot append other characters.
     *
     *   If you want to specify a custom value, make sure that the following requirements are met:
     *
     *   The hostname must be 3 to 128 characters in length, and can contain lowercase letters, digits, hyphens (-), and periods (.). You can use asterisks (\*) and question marks (?) as wildcard characters.
     *   The hostname must contain at least one period (.) but cannot start or end with a period (.).
     *   The rightmost domain label can contain only letters and wildcard characters. It cannot contain digits or hyphens (-).
     *   The domain labels cannot start or end with a hyphen (-).
     *   You can use asterisks (\*) and question marks (?) as wildcards anywhere in a domain label.
     *
     * @example key
     *
     * @var string
     */
    public $key;

    /**
     * @description The HTTP status code that indicates the redirect type. Valid values: **301**, **302**, **303**, **307**, and **308**.
     *
     * @example UserDefined
     *
     * @var string
     */
    public $value;

    /**
     * @description The path to which requests are redirected. Valid values:
     *
     *   Default value: **${path}**. **${host}**, **${protocol}**, and **${port}** are also supported. Each variable cannot be specified more than once. You can specify one or more of the preceding variables in each request. You can also combine them with the following characters.
     *
     *   If you want to specify a custom value, make sure that the following requirements are met:
     *
     *   The value is 1 to 128 characters in length.
     *   It must start with a forward slash (/) and can contain letters, digits, and the following special characters: `$ - _ .+ / & ~ @ :`. It cannot contain the following special characters: `" % # ; ! ( ) [ ]^ , "`. You can use asterisks (\*) and question marks (?) as wildcards.
     *   The value is case-sensitive.
     *
     * @example UserDefined
     *
     * @var string
     */
    public $valueType;
    protected $_name = [
        'key'       => 'Key',
        'value'     => 'Value',
        'valueType' => 'ValueType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return insertHeaderConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }

        return $model;
    }
}
