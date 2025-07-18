<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CommonConfig;

use AlibabaCloud\SDK\Csas\V20230120\Models\CommonConfig\idp\dingtalk;
use AlibabaCloud\SDK\Csas\V20230120\Models\CommonConfig\idp\feishu;
use AlibabaCloud\SDK\Csas\V20230120\Models\CommonConfig\idp\idaas2;
use AlibabaCloud\SDK\Csas\V20230120\Models\CommonConfig\idp\saml;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apOidcCallbackUrl) {
            $res['ApOidcCallbackUrl'] = $this->apOidcCallbackUrl;
        }
        if (null !== $this->dingtalk) {
            $res['Dingtalk'] = null !== $this->dingtalk ? $this->dingtalk->toMap() : null;
        }
        if (null !== $this->feishu) {
            $res['Feishu'] = null !== $this->feishu ? $this->feishu->toMap() : null;
        }
        if (null !== $this->idaas2) {
            $res['Idaas2'] = null !== $this->idaas2 ? $this->idaas2->toMap() : null;
        }
        if (null !== $this->saml) {
            $res['Saml'] = null !== $this->saml ? $this->saml->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return idp
     */
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
