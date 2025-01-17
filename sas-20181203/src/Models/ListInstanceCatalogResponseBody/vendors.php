<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListInstanceCatalogResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListInstanceCatalogResponseBody\vendors\instanceTypes;

class vendors extends Model
{
    /**
     * @var instanceTypes[]
     */
    public $instanceTypes;
    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'instanceTypes' => 'InstanceTypes',
        'name'          => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->instanceTypes)) {
            Model::validateArray($this->instanceTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceTypes) {
            if (\is_array($this->instanceTypes)) {
                $res['InstanceTypes'] = [];
                $n1                   = 0;
                foreach ($this->instanceTypes as $item1) {
                    $res['InstanceTypes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = [];
                $n1                   = 0;
                foreach ($map['InstanceTypes'] as $item1) {
                    $model->instanceTypes[$n1++] = instanceTypes::fromMap($item1);
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
