<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribePrinsInstanceResponseBody\dbInstance\hostInstances;

use AlibabaCloud\Dara\Model;

class ipAddress extends Model
{
    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'ip' => 'Ip',
        'port' => 'Port',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
