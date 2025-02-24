<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\PAL7Config;

use AlibabaCloud\Dara\Model;

class clientIpConfig extends Model
{
    /**
     * @var string[]
     */
    public $clientIpHeaders;
    /**
     * @var string[]
     */
    public $trustedProxies;
    protected $_name = [
        'clientIpHeaders' => 'ClientIpHeaders',
        'trustedProxies'  => 'TrustedProxies',
    ];

    public function validate()
    {
        if (\is_array($this->clientIpHeaders)) {
            Model::validateArray($this->clientIpHeaders);
        }
        if (\is_array($this->trustedProxies)) {
            Model::validateArray($this->trustedProxies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientIpHeaders) {
            if (\is_array($this->clientIpHeaders)) {
                $res['ClientIpHeaders'] = [];
                $n1                     = 0;
                foreach ($this->clientIpHeaders as $item1) {
                    $res['ClientIpHeaders'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->trustedProxies) {
            if (\is_array($this->trustedProxies)) {
                $res['TrustedProxies'] = [];
                $n1                    = 0;
                foreach ($this->trustedProxies as $item1) {
                    $res['TrustedProxies'][$n1++] = $item1;
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
        if (isset($map['ClientIpHeaders'])) {
            if (!empty($map['ClientIpHeaders'])) {
                $model->clientIpHeaders = [];
                $n1                     = 0;
                foreach ($map['ClientIpHeaders'] as $item1) {
                    $model->clientIpHeaders[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TrustedProxies'])) {
            if (!empty($map['TrustedProxies'])) {
                $model->trustedProxies = [];
                $n1                    = 0;
                foreach ($map['TrustedProxies'] as $item1) {
                    $model->trustedProxies[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
