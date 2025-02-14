<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class UpdateHybridProxyRequest extends Model
{
    /**
     * @var string
     */
    public $proxyUuid;
    protected $_name = [
        'proxyUuid' => 'ProxyUuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->proxyUuid) {
            $res['ProxyUuid'] = $this->proxyUuid;
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
        if (isset($map['ProxyUuid'])) {
            $model->proxyUuid = $map['ProxyUuid'];
        }

        return $model;
    }
}
