<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleConditions;

use AlibabaCloud\Tea\Model;

class headerConfig extends Model
{
    /**
     * @description The path to which requests are forwarded. Limits:
     *
     *   The path must be 1 to 128 characters in length.
     *   It must start with a forward slash (/) and can contain letters, digits, and the following special characters: `$ - _ .+ / & ~ @ :`. It cannot contain the following special characters: `" % # ; ! ( ) [ ]^ , "`. You can use asterisks (\*) and question marks (?) as wildcards.
     *   The value is case-sensitive.
     *
     * @example Port
     *
     * @var string
     */
    public $key;

    /**
     * @var string[]
     */
    public $values;
    protected $_name = [
        'key'    => 'Key',
        'values' => 'Values',
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
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return headerConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}
