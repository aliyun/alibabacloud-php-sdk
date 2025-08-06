<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest;

use AlibabaCloud\Dara\Model;

class securityOptions extends Model
{
    /**
     * @var string
     */
    public $confidentialComputingMode;

    /**
     * @var string
     */
    public $trustedSystemMode;
    protected $_name = [
        'confidentialComputingMode' => 'ConfidentialComputingMode',
        'trustedSystemMode' => 'TrustedSystemMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->confidentialComputingMode) {
            $res['ConfidentialComputingMode'] = $this->confidentialComputingMode;
        }

        if (null !== $this->trustedSystemMode) {
            $res['TrustedSystemMode'] = $this->trustedSystemMode;
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
        if (isset($map['ConfidentialComputingMode'])) {
            $model->confidentialComputingMode = $map['ConfidentialComputingMode'];
        }

        if (isset($map['TrustedSystemMode'])) {
            $model->trustedSystemMode = $map['TrustedSystemMode'];
        }

        return $model;
    }
}
