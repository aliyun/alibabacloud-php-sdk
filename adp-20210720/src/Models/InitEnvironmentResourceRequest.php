<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class InitEnvironmentResourceRequest extends Model
{
    /**
     * @var string
     */
    public $accessKeyID;

    /**
     * @var string
     */
    public $accessKeySecret;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'accessKeyID'     => 'accessKeyID',
        'accessKeySecret' => 'accessKeySecret',
        'securityToken'   => 'securityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyID) {
            $res['accessKeyID'] = $this->accessKeyID;
        }
        if (null !== $this->accessKeySecret) {
            $res['accessKeySecret'] = $this->accessKeySecret;
        }
        if (null !== $this->securityToken) {
            $res['securityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InitEnvironmentResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessKeyID'])) {
            $model->accessKeyID = $map['accessKeyID'];
        }
        if (isset($map['accessKeySecret'])) {
            $model->accessKeySecret = $map['accessKeySecret'];
        }
        if (isset($map['securityToken'])) {
            $model->securityToken = $map['securityToken'];
        }

        return $model;
    }
}
