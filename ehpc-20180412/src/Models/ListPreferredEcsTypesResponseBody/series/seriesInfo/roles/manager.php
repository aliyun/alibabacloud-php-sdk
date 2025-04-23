<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListPreferredEcsTypesResponseBody\series\seriesInfo\roles;

use AlibabaCloud\Dara\Model;

class manager extends Model
{
    /**
     * @var string[]
     */
    public $instanceTypeId;
    protected $_name = [
        'instanceTypeId' => 'InstanceTypeId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceTypeId)) {
            Model::validateArray($this->instanceTypeId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceTypeId) {
            if (\is_array($this->instanceTypeId)) {
                $res['InstanceTypeId'] = [];
                $n1 = 0;
                foreach ($this->instanceTypeId as $item1) {
                    $res['InstanceTypeId'][$n1++] = $item1;
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
        if (isset($map['InstanceTypeId'])) {
            if (!empty($map['InstanceTypeId'])) {
                $model->instanceTypeId = [];
                $n1 = 0;
                foreach ($map['InstanceTypeId'] as $item1) {
                    $model->instanceTypeId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
