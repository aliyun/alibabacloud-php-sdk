<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class driftDetection extends Model
{
    /**
     * @description The resource types that are supported by the drift detection feature.
     *
     * @var string[]
     */
    public $supportedResourceTypes;
    protected $_name = [
        'supportedResourceTypes' => 'SupportedResourceTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedResourceTypes) {
            $res['SupportedResourceTypes'] = $this->supportedResourceTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return driftDetection
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedResourceTypes'])) {
            if (!empty($map['SupportedResourceTypes'])) {
                $model->supportedResourceTypes = $map['SupportedResourceTypes'];
            }
        }

        return $model;
    }
}
