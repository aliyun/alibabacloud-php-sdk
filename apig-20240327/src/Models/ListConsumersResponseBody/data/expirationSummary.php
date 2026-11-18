<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumersResponseBody\data;

use AlibabaCloud\Dara\Model;

class expirationSummary extends Model
{
    /**
     * @var int
     */
    public $aboutToExpire;

    /**
     * @var int
     */
    public $expired;
    protected $_name = [
        'aboutToExpire' => 'aboutToExpire',
        'expired' => 'expired',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aboutToExpire) {
            $res['aboutToExpire'] = $this->aboutToExpire;
        }

        if (null !== $this->expired) {
            $res['expired'] = $this->expired;
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
        if (isset($map['aboutToExpire'])) {
            $model->aboutToExpire = $map['aboutToExpire'];
        }

        if (isset($map['expired'])) {
            $model->expired = $map['expired'];
        }

        return $model;
    }
}
