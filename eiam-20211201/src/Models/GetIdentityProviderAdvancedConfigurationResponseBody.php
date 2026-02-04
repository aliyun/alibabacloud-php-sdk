<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderAdvancedConfigurationResponseBody\advancedConfiguration;

class GetIdentityProviderAdvancedConfigurationResponseBody extends Model
{
    /**
     * @var advancedConfiguration
     */
    public $advancedConfiguration;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'advancedConfiguration' => 'AdvancedConfiguration',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->advancedConfiguration) {
            $this->advancedConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advancedConfiguration) {
            $res['AdvancedConfiguration'] = null !== $this->advancedConfiguration ? $this->advancedConfiguration->toArray($noStream) : $this->advancedConfiguration;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AdvancedConfiguration'])) {
            $model->advancedConfiguration = advancedConfiguration::fromMap($map['AdvancedConfiguration']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
