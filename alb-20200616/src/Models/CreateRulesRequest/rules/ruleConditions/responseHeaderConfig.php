<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleConditions;

use AlibabaCloud\Tea\Model;

class responseHeaderConfig extends Model
{
    /**
     * @description The key of the header.
     *
     *   The header key must be 1 to 40 characters in length.
     *   The header key can contain lowercase letters, digits, hyphens (-), and underscores (_).
     *   Cookie and Host are not supported.
     *
     * @example Port
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the header.
     *
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
     * @return responseHeaderConfig
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
