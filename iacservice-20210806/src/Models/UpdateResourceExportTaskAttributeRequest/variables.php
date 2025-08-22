<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateResourceExportTaskAttributeRequest;

use AlibabaCloud\Dara\Model;

class variables extends Model
{
    /**
     * @var string[]
     */
    public $properties;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'properties' => 'properties',
        'resourceType' => 'resourceType',
    ];

    public function validate()
    {
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['properties'] = [];
                $n1 = 0;
                foreach ($this->properties as $item1) {
                    $res['properties'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
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
        if (isset($map['properties'])) {
            if (!empty($map['properties'])) {
                $model->properties = [];
                $n1 = 0;
                foreach ($map['properties'] as $item1) {
                    $model->properties[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}
