<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetAssistantCapabilityResponseBody\capabilityAssessment;

use AlibabaCloud\Tea\Model;

class capabilityList extends Model
{
    /**
     * @example 能力概览
     *
     * @var string
     */
    public $capabilityOverview;

    /**
     * @example 能力描述
     *
     * @var string
     */
    public $description;

    /**
     * @example 能力名称
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'capabilityOverview' => 'capabilityOverview',
        'description' => 'description',
        'name' => 'name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->capabilityOverview) {
            $res['capabilityOverview'] = $this->capabilityOverview;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return capabilityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['capabilityOverview'])) {
            $model->capabilityOverview = $map['capabilityOverview'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
