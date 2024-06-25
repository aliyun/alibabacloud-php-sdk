<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryMobilesCardSupportResponseBody\data;

use AlibabaCloud\Tea\Model;

class queryResult extends Model
{
    /**
     * @description The mobile phone number.
     *
     * @example 1380000****
     *
     * @var string
     */
    public $mobile;

    /**
     * @description Indicates whether the mobile phone number supports card messages. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $support;
    protected $_name = [
        'mobile'  => 'Mobile',
        'support' => 'Support',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->support) {
            $res['Support'] = $this->support;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queryResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['Support'])) {
            $model->support = $map['Support'];
        }

        return $model;
    }
}
