<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupEventsResponseBody\data\events;

use AlibabaCloud\Dara\Model;

class source extends Model
{
    /**
     * @var string
     */
    public $component;

    /**
     * @var string
     */
    public $host;
    protected $_name = [
        'component' => 'Component',
        'host' => 'Host',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->component) {
            $res['Component'] = $this->component;
        }

        if (null !== $this->host) {
            $res['Host'] = $this->host;
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
        if (isset($map['Component'])) {
            $model->component = $map['Component'];
        }

        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        return $model;
    }
}
