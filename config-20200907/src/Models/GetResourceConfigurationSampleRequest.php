<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;

class GetResourceConfigurationSampleRequest extends Model
{
    /**
     * @var string
     */
    public $mockOnly;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'mockOnly' => 'MockOnly',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mockOnly) {
            $res['MockOnly'] = $this->mockOnly;
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
        if (isset($map['MockOnly'])) {
            $model->mockOnly = $map['MockOnly'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
