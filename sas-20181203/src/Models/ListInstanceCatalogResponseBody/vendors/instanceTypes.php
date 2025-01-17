<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListInstanceCatalogResponseBody\vendors;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListInstanceCatalogResponseBody\vendors\instanceTypes\instanceSubTypes;

class instanceTypes extends Model
{
    /**
     * @var instanceSubTypes[]
     */
    public $instanceSubTypes;
    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'instanceSubTypes' => 'InstanceSubTypes',
        'name'             => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->instanceSubTypes)) {
            Model::validateArray($this->instanceSubTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceSubTypes) {
            if (\is_array($this->instanceSubTypes)) {
                $res['InstanceSubTypes'] = [];
                $n1                      = 0;
                foreach ($this->instanceSubTypes as $item1) {
                    $res['InstanceSubTypes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['InstanceSubTypes'])) {
            if (!empty($map['InstanceSubTypes'])) {
                $model->instanceSubTypes = [];
                $n1                      = 0;
                foreach ($map['InstanceSubTypes'] as $item1) {
                    $model->instanceSubTypes[$n1++] = instanceSubTypes::fromMap($item1);
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
