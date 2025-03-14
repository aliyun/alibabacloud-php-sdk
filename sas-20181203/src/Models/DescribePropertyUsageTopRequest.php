<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribePropertyUsageTopRequest extends Model
{
    /**
     * @description The type of the asset fingerprint. Valid value:
     *
     *   **port**: port
     *   **process**: process
     *   **software**: software
     *   **user**: account
     *   **sca**: middleware
     *
     * This parameter is required.
     *
     * @example port
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePropertyUsageTopRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
