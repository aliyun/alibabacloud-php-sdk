<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Tea\Model;

class IsKeepAliveResponseBody extends Model
{
    /**
     * @example True
     *
     * @var bool
     */
    public $isKeepAlive;

    /**
     * @example cn-hangzhou+dir-885351****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 141631846826****
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'isKeepAlive'  => 'IsKeepAlive',
        'officeSiteId' => 'OfficeSiteId',
        'requestId'    => 'RequestId',
        'tenantId'     => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isKeepAlive) {
            $res['IsKeepAlive'] = $this->isKeepAlive;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IsKeepAliveResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsKeepAlive'])) {
            $model->isKeepAlive = $map['IsKeepAlive'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
