<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class ProvisionApplicationRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * This parameter is required.
     * @example 407426893752729****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The permissions that are granted to the application. Separate multiple permissions with a semicolon (;).
     *
     * >  For more information about the supported permissions, see [Overview](https://help.aliyun.com/zh/ram/user-guide/overview-of-oauth-applications).
     * @example openid;aliuid
     *
     * @var string
     */
    public $scopes;
    protected $_name = [
        'appId'  => 'AppId',
        'scopes' => 'Scopes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->scopes) {
            $res['Scopes'] = $this->scopes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProvisionApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Scopes'])) {
            $model->scopes = $map['Scopes'];
        }

        return $model;
    }
}
