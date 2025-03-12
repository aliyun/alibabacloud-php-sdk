<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class ProvisionExternalApplicationRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * This parameter is required.
     * @example 403550611646604****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The information about the scope of permissions granted to the application. You can enter multiple scopes and separate them with semicolons (;).
     *
     * >  For more information about the supported permission scopes, see the "OAuth scope" section in the [Overview](https://help.aliyun.com/zh/ram/user-guide/overview-of-oauth-applications) topic.
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
     * @return ProvisionExternalApplicationRequest
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
