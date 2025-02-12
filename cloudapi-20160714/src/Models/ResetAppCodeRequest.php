<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;

class ResetAppCodeRequest extends Model
{
    /**
     * @var string
     */
    public $appCode;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
