<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetApplicationInstanceListResponseBody\data;

use AlibabaCloud\SDK\Mse\V20190531\Models\GetApplicationInstanceListResponseBody\data\result\tags;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The node IP address.
     *
     * @example 10.1.2.3
     *
     * @var string
     */
    public $ip;

    /**
     * @description The application port.
     *
     * @example 8080
     *
     * @var string
     */
    public $port;

    /**
     * @description The node tags.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'ip'   => 'Ip',
        'port' => 'Port',
        'tags' => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
