<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkCreateClientResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkCreateClientResponseBody\data\client;

class data extends Model
{
    /**
     * @var client
     */
    public $client;

    /**
     * @var string
     */
    public $clinkRequestId;
    protected $_name = [
        'client' => 'Client',
        'clinkRequestId' => 'ClinkRequestId',
    ];

    public function validate()
    {
        if (null !== $this->client) {
            $this->client->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->client) {
            $res['Client'] = null !== $this->client ? $this->client->toArray($noStream) : $this->client;
        }

        if (null !== $this->clinkRequestId) {
            $res['ClinkRequestId'] = $this->clinkRequestId;
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
        if (isset($map['Client'])) {
            $model->client = client::fromMap($map['Client']);
        }

        if (isset($map['ClinkRequestId'])) {
            $model->clinkRequestId = $map['ClinkRequestId'];
        }

        return $model;
    }
}
