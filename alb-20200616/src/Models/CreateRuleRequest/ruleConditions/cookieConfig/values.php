<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateRuleRequest\ruleConditions\cookieConfig;

use AlibabaCloud\Tea\Model;

class values extends Model
{
    /**
     * @description The cookie key.
     *
     *   The cookie key must be 1 to 100 characters in length.
     *   You can use asterisks (\\*) and question marks (?) as wildcard characters.
     *   The cookie key can contain printable characters, but cannot contain uppercase letters, space characters, or the following special characters: `; # [ ] { } \\ | < > &`.
     *
     * @example test
     *
     * @var string
     */
    public $key;

    /**
     * @description The cookie value.
     *
     *   The cookie value must be 1 to 100 characters in length.
     *   You can use asterisks (\\*) and question marks (?) as wildcard characters.
     *   The cookie value can contain printable characters, but cannot contain uppercase letters, space characters, or the following special characters: `; # [ ] { } \\ | < > &`.
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
