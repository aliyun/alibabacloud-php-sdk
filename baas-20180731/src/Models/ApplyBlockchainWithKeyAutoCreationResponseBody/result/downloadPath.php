<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\ApplyBlockchainWithKeyAutoCreationResponseBody\result;

use AlibabaCloud\Tea\Model;

class downloadPath extends Model
{
    /**
     * @var string
     */
    public $bizviewUrl;

    /**
     * @var string
     */
    public $certUrl;

    /**
     * @var string
     */
    public $sdkUrl;
    protected $_name = [
        'bizviewUrl' => 'BizviewUrl',
        'certUrl'    => 'CertUrl',
        'sdkUrl'     => 'SdkUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizviewUrl) {
            $res['BizviewUrl'] = $this->bizviewUrl;
        }
        if (null !== $this->certUrl) {
            $res['CertUrl'] = $this->certUrl;
        }
        if (null !== $this->sdkUrl) {
            $res['SdkUrl'] = $this->sdkUrl;
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
        if (isset($map['BizviewUrl'])) {
            $model->bizviewUrl = $map['BizviewUrl'];
        }
        if (isset($map['CertUrl'])) {
            $model->certUrl = $map['CertUrl'];
        }
        if (isset($map['SdkUrl'])) {
            $model->sdkUrl = $map['SdkUrl'];
        }

        return $model;
    }
}
