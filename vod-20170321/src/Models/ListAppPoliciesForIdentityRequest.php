<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class ListAppPoliciesForIdentityRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $identityName;

    /**
     * @var string
     */
    public $identityType;
    protected $_name = [
        'appId' => 'AppId',
        'identityName' => 'IdentityName',
        'identityType' => 'IdentityType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->identityName) {
            $res['IdentityName'] = $this->identityName;
        }

        if (null !== $this->identityType) {
            $res['IdentityType'] = $this->identityType;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['IdentityName'])) {
            $model->identityName = $map['IdentityName'];
        }

        if (isset($map['IdentityType'])) {
            $model->identityType = $map['IdentityType'];
        }

        return $model;
    }
}
