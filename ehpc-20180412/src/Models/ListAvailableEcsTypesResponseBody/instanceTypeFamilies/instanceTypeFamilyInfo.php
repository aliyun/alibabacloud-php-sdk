<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListAvailableEcsTypesResponseBody\instanceTypeFamilies;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListAvailableEcsTypesResponseBody\instanceTypeFamilies\instanceTypeFamilyInfo\types;

class instanceTypeFamilyInfo extends Model
{
    /**
     * @var string
     */
    public $generation;

    /**
     * @var string
     */
    public $instanceTypeFamilyId;

    /**
     * @var types
     */
    public $types;
    protected $_name = [
        'generation' => 'Generation',
        'instanceTypeFamilyId' => 'InstanceTypeFamilyId',
        'types' => 'Types',
    ];

    public function validate()
    {
        if (null !== $this->types) {
            $this->types->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->generation) {
            $res['Generation'] = $this->generation;
        }

        if (null !== $this->instanceTypeFamilyId) {
            $res['InstanceTypeFamilyId'] = $this->instanceTypeFamilyId;
        }

        if (null !== $this->types) {
            $res['Types'] = null !== $this->types ? $this->types->toArray($noStream) : $this->types;
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
        if (isset($map['Generation'])) {
            $model->generation = $map['Generation'];
        }

        if (isset($map['InstanceTypeFamilyId'])) {
            $model->instanceTypeFamilyId = $map['InstanceTypeFamilyId'];
        }

        if (isset($map['Types'])) {
            $model->types = types::fromMap($map['Types']);
        }

        return $model;
    }
}
