<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleConditions\cookieConfig;

use AlibabaCloud\Tea\Model;

class values extends Model
{
    /**
     * @description The hostname. A forwarding rule can contain only one unique hostname.
     *
     *   The hostname must be 3 to 128 characters in length, and can contain lowercase letters, digits, hyphens (-), periods (.), asterisks (\*), and question marks (?).
     *   The hostname must contain at least one period (.) but cannot start or end with a period (.).
     *   The rightmost domain label can contain only letters and wildcard characters. It cannot contain digits or hyphens (-).
     *   The domain labels do not start or end with hyphens (-). You can use an asterisk (\*) and question mark (?) as wildcards anywhere in a domain label.
     *
     * @example test
     *
     * @var string
     */
    public $key;

    /**
     * @description The request methods. Valid values: **HEAD**, **GET**, **POST**, **OPTIONS**, **PUT**, **PATCH**, and **DELETE**.
     *
     * @example test
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return values
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

        return $model;
    }
}
