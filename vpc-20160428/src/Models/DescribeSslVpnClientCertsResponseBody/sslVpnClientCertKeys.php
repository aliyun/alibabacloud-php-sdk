<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSslVpnClientCertsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSslVpnClientCertsResponseBody\sslVpnClientCertKeys\sslVpnClientCertKey;

class sslVpnClientCertKeys extends Model
{
    /**
     * @var sslVpnClientCertKey[]
     */
    public $sslVpnClientCertKey;
    protected $_name = [
        'sslVpnClientCertKey' => 'SslVpnClientCertKey',
    ];

    public function validate()
    {
        if (\is_array($this->sslVpnClientCertKey)) {
            Model::validateArray($this->sslVpnClientCertKey);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sslVpnClientCertKey) {
            if (\is_array($this->sslVpnClientCertKey)) {
                $res['SslVpnClientCertKey'] = [];
                $n1                         = 0;
                foreach ($this->sslVpnClientCertKey as $item1) {
                    $res['SslVpnClientCertKey'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SslVpnClientCertKey'])) {
            if (!empty($map['SslVpnClientCertKey'])) {
                $model->sslVpnClientCertKey = [];
                $n1                         = 0;
                foreach ($map['SslVpnClientCertKey'] as $item1) {
                    $model->sslVpnClientCertKey[$n1++] = sslVpnClientCertKey::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
