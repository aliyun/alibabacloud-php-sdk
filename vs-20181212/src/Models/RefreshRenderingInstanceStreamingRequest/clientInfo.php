<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\RefreshRenderingInstanceStreamingRequest;

use AlibabaCloud\Dara\Model;

class clientInfo extends Model
{
    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var bool
     */
    public $newClient;
    protected $_name = [
        'clientIp' => 'ClientIp',
        'newClient' => 'NewClient',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }

        if (null !== $this->newClient) {
            $res['NewClient'] = $this->newClient;
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
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }

        if (isset($map['NewClient'])) {
            $model->newClient = $map['NewClient'];
        }

        return $model;
    }
}
