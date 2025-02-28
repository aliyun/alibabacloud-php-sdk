<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\ModifyApplicationSpecRequest\instanceSpec;

class ModifyApplicationSpecRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;
    /**
     * @var instanceSpec[]
     */
    public $instanceSpec;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'instanceSpec'  => 'InstanceSpec',
    ];

    public function validate()
    {
        if (\is_array($this->instanceSpec)) {
            Model::validateArray($this->instanceSpec);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->instanceSpec) {
            if (\is_array($this->instanceSpec)) {
                $res['InstanceSpec'] = [];
                $n1                  = 0;
                foreach ($this->instanceSpec as $item1) {
                    $res['InstanceSpec'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['InstanceSpec'])) {
            if (!empty($map['InstanceSpec'])) {
                $model->instanceSpec = [];
                $n1                  = 0;
                foreach ($map['InstanceSpec'] as $item1) {
                    $model->instanceSpec[$n1++] = instanceSpec::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
