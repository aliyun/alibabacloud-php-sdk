<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingConfigurationShrinkRequest;

use AlibabaCloud\Dara\Model;

class securityOptions extends Model
{
    /**
     * @var string
     */
    public $confidentialComputingMode;
    protected $_name = [
        'confidentialComputingMode' => 'ConfidentialComputingMode',
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

        return $model;
    }
}
