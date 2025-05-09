<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class InspectProxyAccessSecretRequest extends Model
{
    /**
     * @var int
     */
    public $proxyAccessId;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'proxyAccessId' => 'ProxyAccessId',
        'tid' => 'Tid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->proxyAccessId) {
            $res['ProxyAccessId'] = $this->proxyAccessId;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
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
        if (isset($map['ProxyAccessId'])) {
            $model->proxyAccessId = $map['ProxyAccessId'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
