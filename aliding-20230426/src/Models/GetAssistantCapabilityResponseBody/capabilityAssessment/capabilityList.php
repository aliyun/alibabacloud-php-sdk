<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetAssistantCapabilityResponseBody\capabilityAssessment;

use AlibabaCloud\Dara\Model;

class capabilityList extends Model
{
    /**
     * @var string
     */
    public $capabilityOverview;

    /**
     * @var string
     */
    public $description;

    /**
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'capabilityOverview' => 'capabilityOverview',
        'description' => 'description',
        'metadata' => 'metadata',
        'name' => 'name',
    ];

    public function validate()
    {
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capabilityOverview) {
            $res['capabilityOverview'] = $this->capabilityOverview;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['capabilityOverview'])) {
            $model->capabilityOverview = $map['capabilityOverview'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['metadata'])) {
            if (!empty($map['metadata'])) {
                $model->metadata = [];
                foreach ($map['metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
