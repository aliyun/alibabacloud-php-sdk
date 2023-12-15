<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeDownloadPathsOfContractChainResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $caUrl;

    /**
     * @var string
     */
    public $certUrl;

    /**
     * @var string
     */
    public $trustCaUrl;
    protected $_name = [
        'caUrl'      => 'CaUrl',
        'certUrl'    => 'CertUrl',
        'trustCaUrl' => 'TrustCaUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caUrl) {
            $res['CaUrl'] = $this->caUrl;
        }
        if (null !== $this->certUrl) {
            $res['CertUrl'] = $this->certUrl;
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
        if (isset($map['CaUrl'])) {
            $model->caUrl = $map['CaUrl'];
        }
        if (isset($map['CertUrl'])) {
            $model->certUrl = $map['CertUrl'];
        }
        if (isset($map['TrustCaUrl'])) {
            $model->trustCaUrl = $map['TrustCaUrl'];
        }

        return $model;
    }
}
