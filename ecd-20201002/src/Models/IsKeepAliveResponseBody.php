<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Dara\Model;

class IsKeepAliveResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isKeepAlive;
    /**
     * @var string
     */
    public $officeSiteId;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
