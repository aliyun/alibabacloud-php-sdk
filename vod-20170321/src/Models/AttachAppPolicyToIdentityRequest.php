<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class AttachAppPolicyToIdentityRequest extends Model
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

    /**
     * @var string
     */
    public $policyNames;
    protected $_name = [
        'identityType' => 'IdentityType',
        'identityName' => 'IdentityName',
        'appId'        => 'AppId',
        'policyNames'  => 'PolicyNames',
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
        if (null !== $this->policyNames) {
            $res['PolicyNames'] = $this->policyNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachAppPolicyToIdentityRequest
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
        if (isset($map['PolicyNames'])) {
            $model->policyNames = $map['PolicyNames'];
        }

        return $model;
    }
}
