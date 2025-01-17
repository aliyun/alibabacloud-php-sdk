<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\terraform\supportedResourceTypes;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\terraform\supportedVersions;

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
        if (null !== $this->supportedResourceTypes) {
            $this->supportedResourceTypes->validate();
        }
        if (\is_array($this->supportedVersions)) {
            Model::validateArray($this->supportedVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedResourceTypes) {
            $res['SupportedResourceTypes'] = null !== $this->supportedResourceTypes ? $this->supportedResourceTypes->toArray($noStream) : $this->supportedResourceTypes;
        }

        if (null !== $this->supportedVersions) {
            if (\is_array($this->supportedVersions)) {
                $res['SupportedVersions'] = [];
                $n1                       = 0;
                foreach ($this->supportedVersions as $item1) {
                    $res['SupportedVersions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['SupportedResourceTypes'])) {
            $model->supportedResourceTypes = supportedResourceTypes::fromMap($map['SupportedResourceTypes']);
        }

        if (isset($map['SupportedVersions'])) {
            if (!empty($map['SupportedVersions'])) {
                $model->supportedVersions = [];
                $n1                       = 0;
                foreach ($map['SupportedVersions'] as $item1) {
                    $model->supportedVersions[$n1++] = supportedVersions::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
