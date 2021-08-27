<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest;

use AlibabaCloud\Tea\Model;

class securityOptions extends Model
{
    /**
     * @var string
     */
    public $trustedSystemMode;

    /**
     * @var string
     */
    public $confidentialComputingMode;
    protected $_name = [
        'trustedSystemMode'         => 'TrustedSystemMode',
        'confidentialComputingMode' => 'ConfidentialComputingMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trustedSystemMode) {
            $res['TrustedSystemMode'] = $this->trustedSystemMode;
        }
        if (null !== $this->confidentialComputingMode) {
            $res['ConfidentialComputingMode'] = $this->confidentialComputingMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TrustedSystemMode'])) {
            $model->trustedSystemMode = $map['TrustedSystemMode'];
        }
        if (isset($map['ConfidentialComputingMode'])) {
            $model->confidentialComputingMode = $map['ConfidentialComputingMode'];
        }

        return $model;
    }
}
