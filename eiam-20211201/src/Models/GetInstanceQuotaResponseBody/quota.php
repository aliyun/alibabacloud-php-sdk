<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceQuotaResponseBody;

use AlibabaCloud\Dara\Model;

class quota extends Model
{
    /**
     * @var string
     */
    public $quotaKey;

    /**
     * @var int
     */
    public $quotaValue;
    protected $_name = [
        'quotaKey' => 'QuotaKey',
        'quotaValue' => 'QuotaValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->quotaKey) {
            $res['QuotaKey'] = $this->quotaKey;
        }

        if (null !== $this->quotaValue) {
            $res['QuotaValue'] = $this->quotaValue;
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
        if (isset($map['QuotaKey'])) {
            $model->quotaKey = $map['QuotaKey'];
        }

        if (isset($map['QuotaValue'])) {
            $model->quotaValue = $map['QuotaValue'];
        }

        return $model;
    }
}
