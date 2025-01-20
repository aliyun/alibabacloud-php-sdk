<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountedClientsResponseBody\clients;

use AlibabaCloud\Dara\Model;

class client extends Model
{
    /**
     * @var string
     */
    public $clientIP;
    protected $_name = [
        'clientIP' => 'ClientIP',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientIP) {
            $res['ClientIP'] = $this->clientIP;
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
        if (isset($map['ClientIP'])) {
            $model->clientIP = $map['ClientIP'];
        }

        return $model;
    }
}
