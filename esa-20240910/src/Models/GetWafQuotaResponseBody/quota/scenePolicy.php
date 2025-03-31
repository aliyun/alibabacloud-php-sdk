<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetWafQuotaResponseBody\quota;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafQuotaInteger;

class scenePolicy extends Model
{
    /**
     * @var bool
     */
    public $enable;

    /**
     * @var WafQuotaInteger
     */
    public $numberTotal;
    protected $_name = [
        'enable' => 'Enable',
        'numberTotal' => 'NumberTotal',
    ];

    public function validate()
    {
        if (null !== $this->numberTotal) {
            $this->numberTotal->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->numberTotal) {
            $res['NumberTotal'] = null !== $this->numberTotal ? $this->numberTotal->toArray($noStream) : $this->numberTotal;
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

        if (isset($map['NumberTotal'])) {
            $model->numberTotal = WafQuotaInteger::fromMap($map['NumberTotal']);
        }

        return $model;
    }
}
