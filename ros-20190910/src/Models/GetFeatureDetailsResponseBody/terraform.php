<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\terraform\supportedResourceTypes;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\terraform\supportedVersions;
use AlibabaCloud\Tea\Model;

class terraform extends Model
{
    /**
     * @var supportedResourceTypes
     */
    public $supportedResourceTypes;

    /**
     * @var supportedVersions[]
     */
    public $supportedVersions;
    protected $_name = [
        'supportedResourceTypes' => 'SupportedResourceTypes',
        'supportedVersions'      => 'SupportedVersions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedResourceTypes) {
            $res['SupportedResourceTypes'] = null !== $this->supportedResourceTypes ? $this->supportedResourceTypes->toMap() : null;
        }
        if (null !== $this->supportedVersions) {
            $res['SupportedVersions'] = [];
            if (null !== $this->supportedVersions && \is_array($this->supportedVersions)) {
                $n = 0;
                foreach ($this->supportedVersions as $item) {
                    $res['SupportedVersions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return terraform
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedResourceTypes'])) {
            $model->supportedResourceTypes = supportedResourceTypes::fromMap($map['SupportedResourceTypes']);
        }
        if (isset($map['SupportedVersions'])) {
            if (!empty($map['SupportedVersions'])) {
                $model->supportedVersions = [];
                $n                        = 0;
                foreach ($map['SupportedVersions'] as $item) {
                    $model->supportedVersions[$n++] = null !== $item ? supportedVersions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
