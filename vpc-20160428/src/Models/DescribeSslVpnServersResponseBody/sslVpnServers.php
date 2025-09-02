<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSslVpnServersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSslVpnServersResponseBody\sslVpnServers\sslVpnServer;

class sslVpnServers extends Model
{
    /**
     * @var sslVpnServer[]
     */
    public $sslVpnServer;
    protected $_name = [
        'sslVpnServer' => 'SslVpnServer',
    ];

    public function validate()
    {
        if (\is_array($this->sslVpnServer)) {
            Model::validateArray($this->sslVpnServer);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sslVpnServer) {
            if (\is_array($this->sslVpnServer)) {
                $res['SslVpnServer'] = [];
                $n1 = 0;
                foreach ($this->sslVpnServer as $item1) {
                    $res['SslVpnServer'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['SslVpnServer'])) {
            if (!empty($map['SslVpnServer'])) {
                $model->sslVpnServer = [];
                $n1 = 0;
                foreach ($map['SslVpnServer'] as $item1) {
                    $model->sslVpnServer[$n1] = sslVpnServer::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
