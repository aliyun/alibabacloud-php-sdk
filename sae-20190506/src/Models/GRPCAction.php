<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class GRPCAction extends Model
{
    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $service;
    protected $_name = [
        'port' => 'port',
        'service' => 'service',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->port) {
            $res['port'] = $this->port;
        }

        if (null !== $this->service) {
            $res['service'] = $this->service;
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
        if (isset($map['port'])) {
            $model->port = $map['port'];
        }

        if (isset($map['service'])) {
            $model->service = $map['service'];
        }

        return $model;
    }
}
