<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainDownloadPathsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $caCrtUrl;

    /**
     * @var string
     */
    public $clientCrtUrl;

    /**
     * @var string
     */
    public $sdkUrl;

    /**
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
     * @return result
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
