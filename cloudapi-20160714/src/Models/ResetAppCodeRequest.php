<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ResetAppCodeRequest extends Model
{
    /**
     * @description The AppCode of the app.
     *
     * This parameter is required.
     * @example 3aaf905a0a1f4f0eabc6d891dfa08afc
     *
     * @var string
     */
    public $appCode;

    /**
     * @description The new AppCode of the app.
     *
     * @example 6f0e7ab2aa5f4b8fb18421e6edf4fb6c2
     *
     * @var string
     */
    public $newAppCode;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'appCode'       => 'AppCode',
        'newAppCode'    => 'NewAppCode',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->newAppCode) {
            $res['NewAppCode'] = $this->newAppCode;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
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
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['NewAppCode'])) {
            $model->newAppCode = $map['NewAppCode'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
