<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationResponseBody\availableZones\availableZone\availableResources;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationResponseBody\availableZones\availableZone\availableResources\availableResource\conditionSupportedResources;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationResponseBody\availableZones\availableZone\availableResources\availableResource\supportedResources;

class availableResource extends Model
{
    /**
     * @var conditionSupportedResources
     */
    public $conditionSupportedResources;
    /**
     * @var supportedResources
     */
    public $supportedResources;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'conditionSupportedResources' => 'ConditionSupportedResources',
        'supportedResources'          => 'SupportedResources',
        'type'                        => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->conditionSupportedResources) {
            $this->conditionSupportedResources->validate();
        }
        if (null !== $this->supportedResources) {
            $this->supportedResources->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditionSupportedResources) {
            $res['ConditionSupportedResources'] = null !== $this->conditionSupportedResources ? $this->conditionSupportedResources->toArray($noStream) : $this->conditionSupportedResources;
        }

        if (null !== $this->supportedResources) {
            $res['SupportedResources'] = null !== $this->supportedResources ? $this->supportedResources->toArray($noStream) : $this->supportedResources;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ConditionSupportedResources'])) {
            $model->conditionSupportedResources = conditionSupportedResources::fromMap($map['ConditionSupportedResources']);
        }

        if (isset($map['SupportedResources'])) {
            $model->supportedResources = supportedResources::fromMap($map['SupportedResources']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
