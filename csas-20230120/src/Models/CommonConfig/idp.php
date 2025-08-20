<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CommonConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\CommonConfig\idp\dingtalk;
use AlibabaCloud\SDK\Csas\V20230120\Models\CommonConfig\idp\feishu;
use AlibabaCloud\SDK\Csas\V20230120\Models\CommonConfig\idp\idaas2;
use AlibabaCloud\SDK\Csas\V20230120\Models\CommonConfig\idp\saml;

class idp extends Model
{
    /**
     * @var string
     */
    public $apOidcCallbackUrl;

    /**
     * @var dingtalk
     */
    public $dingtalk;

    /**
     * @var feishu
     */
    public $feishu;

    /**
     * @var idaas2
     */
    public $idaas2;

    /**
     * @var saml
     */
    public $saml;
    protected $_name = [
        'apOidcCallbackUrl' => 'ApOidcCallbackUrl',
        'dingtalk' => 'Dingtalk',
        'feishu' => 'Feishu',
        'idaas2' => 'Idaas2',
        'saml' => 'Saml',
    ];

    public function validate()
    {
        if (null !== $this->dingtalk) {
            $this->dingtalk->validate();
        }
        if (null !== $this->feishu) {
            $this->feishu->validate();
        }
        if (null !== $this->idaas2) {
            $this->idaas2->validate();
        }
        if (null !== $this->saml) {
            $this->saml->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apOidcCallbackUrl) {
            $res['ApOidcCallbackUrl'] = $this->apOidcCallbackUrl;
        }

        if (null !== $this->dingtalk) {
            $res['Dingtalk'] = null !== $this->dingtalk ? $this->dingtalk->toArray($noStream) : $this->dingtalk;
        }

        if (null !== $this->feishu) {
            $res['Feishu'] = null !== $this->feishu ? $this->feishu->toArray($noStream) : $this->feishu;
        }

        if (null !== $this->idaas2) {
            $res['Idaas2'] = null !== $this->idaas2 ? $this->idaas2->toArray($noStream) : $this->idaas2;
        }

        if (null !== $this->saml) {
            $res['Saml'] = null !== $this->saml ? $this->saml->toArray($noStream) : $this->saml;
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
        if (isset($map['ApOidcCallbackUrl'])) {
            $model->apOidcCallbackUrl = $map['ApOidcCallbackUrl'];
        }

        if (isset($map['Dingtalk'])) {
            $model->dingtalk = dingtalk::fromMap($map['Dingtalk']);
        }

        if (isset($map['Feishu'])) {
            $model->feishu = feishu::fromMap($map['Feishu']);
        }

        if (isset($map['Idaas2'])) {
            $model->idaas2 = idaas2::fromMap($map['Idaas2']);
        }

        if (isset($map['Saml'])) {
            $model->saml = saml::fromMap($map['Saml']);
        }

        return $model;
    }
}
