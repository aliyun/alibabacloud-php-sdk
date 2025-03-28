<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\resourceCleaner\supportedResourceTypes;

class resourceCleaner extends Model
{
    /**
     * @var supportedResourceTypes[]
     */
    public $supportedResourceTypes;
    protected $_name = [
        'supportedResourceTypes' => 'SupportedResourceTypes',
    ];

    public function validate()
    {
        if (\is_array($this->supportedResourceTypes)) {
            Model::validateArray($this->supportedResourceTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedResourceTypes) {
            if (\is_array($this->supportedResourceTypes)) {
                $res['SupportedResourceTypes'] = [];
                $n1 = 0;
                foreach ($this->supportedResourceTypes as $item1) {
                    $res['SupportedResourceTypes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (!empty($map['SupportedResourceTypes'])) {
                $model->supportedResourceTypes = [];
                $n1 = 0;
                foreach ($map['SupportedResourceTypes'] as $item1) {
                    $model->supportedResourceTypes[$n1++] = supportedResourceTypes::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
