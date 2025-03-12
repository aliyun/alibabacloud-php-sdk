<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateHybridProxyRequest extends Model
{
    /**
     * @description The UUID of the Security Center agent.
     *
     * This parameter is required.
     * @example inet-proxy-14bbbb37-c4b9-4e86-83bd-137a940a6ec4
     *
     * @var string
     */
    public $proxyUuid;
    protected $_name = [
        'proxyUuid' => 'ProxyUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->proxyUuid) {
            $res['ProxyUuid'] = $this->proxyUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHybridProxyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProxyUuid'])) {
            $model->proxyUuid = $map['ProxyUuid'];
        }

        return $model;
    }
}
