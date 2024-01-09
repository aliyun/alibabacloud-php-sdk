<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeServersResponseBody;

use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeServersResponseBody\servers\server;
use AlibabaCloud\Tea\Model;

class servers extends Model
{
    /**
     * @var server[]
     */
    public $server;
    protected $_name = [
        'server' => 'server',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->server) {
            $res['server'] = [];
            if (null !== $this->server && \is_array($this->server)) {
                $n = 0;
                foreach ($this->server as $item) {
                    $res['server'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return servers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['server'])) {
            if (!empty($map['server'])) {
                $model->server = [];
                $n             = 0;
                foreach ($map['server'] as $item) {
                    $model->server[$n++] = null !== $item ? server::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
