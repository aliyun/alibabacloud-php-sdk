<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetProxyAccessRequest extends Model
{
    /**
     * @description The ID that Data Management (DMS) generates after the user is authorized to enable the secure access proxy feature for an instance. The ID is unique in DMS. You can call the [ListProxyAccesses](https://help.aliyun.com/document_detail/295386.html) operation to query the ID.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $proxyAccessId;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](https://help.aliyun.com/document_detail/198073.html) or [ListUserTenants](https://help.aliyun.com/document_detail/198074.html) operation to query the tenant ID.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'proxyAccessId' => 'ProxyAccessId',
        'tid'           => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetProxyAccessRequest
     */
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
