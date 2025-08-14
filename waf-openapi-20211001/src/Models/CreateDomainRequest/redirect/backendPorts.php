<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDomainRequest\redirect;

use AlibabaCloud\Dara\Model;

class backendPorts extends Model
{
    /**
     * @var int
     */
    public $backendPort;

    /**
     * @var int
     */
    public $listenPort;

    /**
     * @var string
     */
    public $protocol;
    protected $_name = [
        'backendPort' => 'BackendPort',
        'listenPort' => 'ListenPort',
        'protocol' => 'Protocol',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backendPort) {
            $res['BackendPort'] = $this->backendPort;
        }

        if (null !== $this->listenPort) {
            $res['ListenPort'] = $this->listenPort;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
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
        if (isset($map['BackendPort'])) {
            $model->backendPort = $map['BackendPort'];
        }

        if (isset($map['ListenPort'])) {
            $model->listenPort = $map['ListenPort'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
