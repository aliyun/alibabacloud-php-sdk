<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\GetLoginTokenResponseBody;

use AlibabaCloud\Tea\Model;

class tenantInfos extends Model
{
    /**
     * @example INTERNET
     *
     * @var string
     */
    public $accessType;

    /**
     * @example Up830***
     *
     * @var string
     */
    public $tenantAlias;
    protected $_name = [
        'accessType'  => 'AccessType',
        'tenantAlias' => 'TenantAlias',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }
        if (null !== $this->tenantAlias) {
            $res['TenantAlias'] = $this->tenantAlias;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tenantInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }
        if (isset($map['TenantAlias'])) {
            $model->tenantAlias = $map['TenantAlias'];
        }

        return $model;
    }
}
