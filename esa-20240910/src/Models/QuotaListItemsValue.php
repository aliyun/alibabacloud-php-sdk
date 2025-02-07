<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class QuotaListItemsValue extends Model
{
    /**
     * @var bool
     */
    public $enable;
    /**
     * @var WafQuotaString
     */
    public $value;
    protected $_name = [
        'enable' => 'Enable',
        'value'  => 'Value',
    ];

    public function validate()
    {
        if (null !== $this->value) {
            $this->value->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->value) {
            $res['Value'] = null !== $this->value ? $this->value->toArray($noStream) : $this->value;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
