<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ExecuteCrossCloudOpenAPIRequest extends Model
{
    /**
     * @var string
     */
    public $proxyInfo;
    protected $_name = [
        'proxyInfo' => 'ProxyInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->proxyInfo) {
            $res['ProxyInfo'] = $this->proxyInfo;
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
        if (isset($map['ProxyInfo'])) {
            $model->proxyInfo = $map['ProxyInfo'];
        }

        return $model;
    }
}
