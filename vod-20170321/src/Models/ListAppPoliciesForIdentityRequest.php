<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class ListAppPoliciesForIdentityRequest extends Model
{
    /**
     * @var string
     */
    public $identityType;

    /**
     * @var string
     */
    public $identityName;

    /**
     * @var string
     */
    public $appId;
    protected $_name = [
        'identityType' => 'IdentityType',
        'identityName' => 'IdentityName',
        'appId'        => 'AppId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identityType) {
            $res['IdentityType'] = $this->identityType;
        }
        if (null !== $this->identityName) {
            $res['IdentityName'] = $this->identityName;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAppPoliciesForIdentityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdentityType'])) {
            $model->identityType = $map['IdentityType'];
        }
        if (isset($map['IdentityName'])) {
            $model->identityName = $map['IdentityName'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        return $model;
    }
}
