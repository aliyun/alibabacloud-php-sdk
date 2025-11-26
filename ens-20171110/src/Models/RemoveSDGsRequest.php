<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class RemoveSDGsRequest extends Model
{
    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string[]
     */
    public $sdgIds;
    protected $_name = [
        'instanceIds' => 'InstanceIds',
        'sdgIds' => 'SdgIds',
    ];

    public function validate()
    {
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        if (\is_array($this->sdgIds)) {
            Model::validateArray($this->sdgIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sdgIds) {
            if (\is_array($this->sdgIds)) {
                $res['SdgIds'] = [];
                $n1 = 0;
                foreach ($this->sdgIds as $item1) {
                    $res['SdgIds'][$n1] = $item1;
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
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SdgIds'])) {
            if (!empty($map['SdgIds'])) {
                $model->sdgIds = [];
                $n1 = 0;
                foreach ($map['SdgIds'] as $item1) {
                    $model->sdgIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
