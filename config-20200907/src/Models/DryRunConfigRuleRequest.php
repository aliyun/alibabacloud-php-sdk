<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;

class DryRunConfigRuleRequest extends Model
{
    /**
     * @var string
     */
    public $configurationItem;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'configurationItem' => 'ConfigurationItem',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configurationItem) {
            $res['ConfigurationItem'] = $this->configurationItem;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (isset($map['ConfigurationItem'])) {
            $model->configurationItem = $map['ConfigurationItem'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
