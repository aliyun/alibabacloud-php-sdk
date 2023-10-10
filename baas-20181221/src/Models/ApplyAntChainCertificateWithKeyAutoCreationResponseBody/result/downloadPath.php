<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\ApplyAntChainCertificateWithKeyAutoCreationResponseBody\result;

use AlibabaCloud\Tea\Model;

class downloadPath extends Model
{
    /**
     * @example http://***ca.crt
     *
     * @var string
     */
    public $caCrtUrl;

    /**
     * @example http://***client.crt
     *
     * @var string
     */
    public $clientCrtUrl;

    /**
     * @example http://***
     *
     * @var string
     */
    public $sdkUrl;

    /**
     * @example http://***trustCa
     *
     * @var string
     */
    public $trustCaUrl;
    protected $_name = [
        'caCrtUrl'     => 'CaCrtUrl',
        'clientCrtUrl' => 'ClientCrtUrl',
        'sdkUrl'       => 'SdkUrl',
        'trustCaUrl'   => 'TrustCaUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caCrtUrl) {
            $res['CaCrtUrl'] = $this->caCrtUrl;
        }
        if (null !== $this->clientCrtUrl) {
            $res['ClientCrtUrl'] = $this->clientCrtUrl;
        }
        if (null !== $this->sdkUrl) {
            $res['SdkUrl'] = $this->sdkUrl;
        }
        if (null !== $this->trustCaUrl) {
            $res['TrustCaUrl'] = $this->trustCaUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return downloadPath
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CaCrtUrl'])) {
            $model->caCrtUrl = $map['CaCrtUrl'];
        }
        if (isset($map['ClientCrtUrl'])) {
            $model->clientCrtUrl = $map['ClientCrtUrl'];
        }
        if (isset($map['SdkUrl'])) {
            $model->sdkUrl = $map['SdkUrl'];
        }
        if (isset($map['TrustCaUrl'])) {
            $model->trustCaUrl = $map['TrustCaUrl'];
        }

        return $model;
    }
}
