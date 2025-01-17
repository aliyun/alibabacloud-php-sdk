<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\resourceImport;

use AlibabaCloud\Dara\Model;

class supportedResourceTypes extends Model
{
    /**
     * @var string[]
     */
    public $resourceIdentifiers;
    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'resourceIdentifiers' => 'ResourceIdentifiers',
        'resourceType'        => 'ResourceType',
    ];

    public function validate()
    {
        if (\is_array($this->resourceIdentifiers)) {
            Model::validateArray($this->resourceIdentifiers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceIdentifiers) {
            if (\is_array($this->resourceIdentifiers)) {
                $res['ResourceIdentifiers'] = [];
                $n1                         = 0;
                foreach ($this->resourceIdentifiers as $item1) {
                    $res['ResourceIdentifiers'][$n1++] = $item1;
                }
            }
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
        if (isset($map['ResourceIdentifiers'])) {
            if (!empty($map['ResourceIdentifiers'])) {
                $model->resourceIdentifiers = [];
                $n1                         = 0;
                foreach ($map['ResourceIdentifiers'] as $item1) {
                    $model->resourceIdentifiers[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
