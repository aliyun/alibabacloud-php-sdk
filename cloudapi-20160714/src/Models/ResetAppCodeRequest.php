<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ResetAppCodeRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $appCode;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'appCode'       => 'AppCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetAppCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }

        return $model;
    }
}
