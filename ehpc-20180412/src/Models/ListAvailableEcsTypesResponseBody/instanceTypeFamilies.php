<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListAvailableEcsTypesResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListAvailableEcsTypesResponseBody\instanceTypeFamilies\types;
use AlibabaCloud\Tea\Model;

class instanceTypeFamilies extends Model
{
    /**
     * @var string
     */
    public $instanceTypeFamilyId;

    /**
     * @var types[]
     */
    public $types;

    /**
     * @var string
     */
    public $generation;
    protected $_name = [
        'instanceTypeFamilyId' => 'InstanceTypeFamilyId',
        'types'                => 'Types',
        'generation'           => 'Generation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypeFamilyId) {
            $res['InstanceTypeFamilyId'] = $this->instanceTypeFamilyId;
        }
        if (null !== $this->types) {
            $res['Types'] = [];
            if (null !== $this->types && \is_array($this->types)) {
                $n = 0;
                foreach ($this->types as $item) {
                    $res['Types'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->generation) {
            $res['Generation'] = $this->generation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTypeFamilies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTypeFamilyId'])) {
            $model->instanceTypeFamilyId = $map['InstanceTypeFamilyId'];
        }
        if (isset($map['Types'])) {
            if (!empty($map['Types'])) {
                $model->types = [];
                $n            = 0;
                foreach ($map['Types'] as $item) {
                    $model->types[$n++] = null !== $item ? types::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Generation'])) {
            $model->generation = $map['Generation'];
        }

        return $model;
    }
}
