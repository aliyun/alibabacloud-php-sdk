<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

class ConfigL7UsKeepaliveRequest extends Model
{
    /**
     * @var string
     */
    public $domain;
    /**
     * @var string
     */
    public $upstreamKeepalive;
    protected $_name = [
        'domain'            => 'Domain',
        'upstreamKeepalive' => 'UpstreamKeepalive',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->upstreamKeepalive) {
            $res['UpstreamKeepalive'] = $this->upstreamKeepalive;
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['UpstreamKeepalive'])) {
            $model->upstreamKeepalive = $map['UpstreamKeepalive'];
        }

        return $model;
    }
}
