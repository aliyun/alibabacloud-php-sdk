<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleConditions\cookieConfig;

use AlibabaCloud\Tea\Model;

class values extends Model
{
    /**
     * @description The cookie key, which must be 1 to 100 characters in length, and can contain lowercase letters, asterisks (\\*), question marks (?), and printable characters. It cannot contain space characters or the following special characters: `# [ ] { } \\ | < > &`.
     *
     * @example test
     *
     * @var string
     */
    public $key;

    /**
     * @description The cookie value, which must be 1 to 128 characters in length, and can contain lowercase letters, asterisks (\\*), question marks (?), and printable characters. It cannot contain space characters or the following special characters: `# [ ] { } \\ | < > &`.
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
