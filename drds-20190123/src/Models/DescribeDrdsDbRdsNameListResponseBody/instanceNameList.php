<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDbRdsNameListResponseBody;

use AlibabaCloud\Dara\Model;

class instanceNameList extends Model
{
    /**
     * @var string[]
     */
    public $instanceName;
    protected $_name = [
        'instanceName' => 'InstanceName',
    ];

    public function validate()
    {
        if (\is_array($this->instanceName)) {
            Model::validateArray($this->instanceName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceName) {
            if (\is_array($this->instanceName)) {
                $res['InstanceName'] = [];
                $n1 = 0;
                foreach ($this->instanceName as $item1) {
                    $res['InstanceName'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['InstanceName'])) {
            if (!empty($map['InstanceName'])) {
                $model->instanceName = [];
                $n1 = 0;
                foreach ($map['InstanceName'] as $item1) {
                    $model->instanceName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
