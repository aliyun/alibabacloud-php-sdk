<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupEventsResponseBody\data\events;

use AlibabaCloud\Tea\Model;

class source extends Model
{
    /**
     * @description The component.
     *
     * @example kubelet
     *
     * @var string
     */
    public $component;

    /**
     * @description The host.
     *
     * @example eci
     *
     * @var string
     */
    public $host;
    protected $_name = [
        'component' => 'Component',
        'host'      => 'Host',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return source
     */
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
