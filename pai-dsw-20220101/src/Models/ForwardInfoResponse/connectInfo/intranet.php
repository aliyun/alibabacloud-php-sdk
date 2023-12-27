<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\ForwardInfoResponse\connectInfo;

use AlibabaCloud\Tea\Model;

class intranet extends Model
{
    /**
     * @example dsw-notebook-22-urz3u6cnu0uts7ej9r.dsw-5cc6083084818f60.dsw.pai.alibaba.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @example 22
     *
     * @var string
     */
    public $port;
    protected $_name = [
        'endpoint' => 'Endpoint',
        'port'     => 'Port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return intranet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
