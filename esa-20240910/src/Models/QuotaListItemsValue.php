<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class QuotaListItemsValue extends Model
{
    /**
     * @description The switch for the type of item in the custom list.
     *
     * @var bool
     */
    public $enable;

    /**
     * @description Format restrictions for the type of item in the custom list.
     *
     * @var WafQuotaString
     */
    public $value;
    protected $_name = [
        'enable' => 'Enable',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->value) {
            $res['Value'] = null !== $this->value ? $this->value->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuotaListItemsValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Value'])) {
            $model->value = WafQuotaString::fromMap($map['Value']);
        }

        return $model;
    }
}
