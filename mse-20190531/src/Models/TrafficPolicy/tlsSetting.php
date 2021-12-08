<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\TrafficPolicy;

use AlibabaCloud\Tea\Model;

class tlsSetting extends Model
{
    /**
     * @description ca证书内容
     *
     * @var string
     */
    public $caCertContent;

    /**
     * @description 使用的证书id，仅当为mutual时需要填写
     *
     * @var string
     */
    public $certId;

    /**
     * @description 到后端服务些带
     *
     * @var string
     */
    public $sni;

    /**
     * @description tls模式。为枚举类，可为NONE, SIMPLE, MUITUAL
     *
     * @var string
     */
    public $tlsMode;
    protected $_name = [
        'caCertContent' => 'CaCertContent',
        'certId'        => 'CertId',
        'sni'           => 'Sni',
        'tlsMode'       => 'TlsMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caCertContent) {
            $res['CaCertContent'] = $this->caCertContent;
        }
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }
        if (null !== $this->sni) {
            $res['Sni'] = $this->sni;
        }
        if (null !== $this->tlsMode) {
            $res['TlsMode'] = $this->tlsMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tlsSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CaCertContent'])) {
            $model->caCertContent = $map['CaCertContent'];
        }
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }
        if (isset($map['Sni'])) {
            $model->sni = $map['Sni'];
        }
        if (isset($map['TlsMode'])) {
            $model->tlsMode = $map['TlsMode'];
        }

        return $model;
    }
}
