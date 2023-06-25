<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\resourceCleaner\supportedResourceTypes;
use AlibabaCloud\Tea\Model;

class resourceCleaner extends Model
{
    /**
     * @description The resource types that can be cleaned up.
     *
     * @var supportedResourceTypes[]
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
            $res['SupportedResourceTypes'] = [];
            if (null !== $this->supportedResourceTypes && \is_array($this->supportedResourceTypes)) {
                $n = 0;
                foreach ($this->supportedResourceTypes as $item) {
                    $res['SupportedResourceTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceCleaner
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedResourceTypes'])) {
            if (!empty($map['SupportedResourceTypes'])) {
                $model->supportedResourceTypes = [];
                $n                             = 0;
                foreach ($map['SupportedResourceTypes'] as $item) {
                    $model->supportedResourceTypes[$n++] = null !== $item ? supportedResourceTypes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
