<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationSsoFormParamsRequest\applicationTemplateParams;

class UpdateApplicationSsoFormParamsRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var applicationTemplateParams[]
     */
    public $applicationTemplateParams;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'applicationTemplateParams' => 'ApplicationTemplateParams',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->applicationTemplateParams)) {
            Model::validateArray($this->applicationTemplateParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->applicationTemplateParams) {
            if (\is_array($this->applicationTemplateParams)) {
                $res['ApplicationTemplateParams'] = [];
                $n1 = 0;
                foreach ($this->applicationTemplateParams as $item1) {
                    $res['ApplicationTemplateParams'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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

        if (isset($map['ApplicationTemplateParams'])) {
            if (!empty($map['ApplicationTemplateParams'])) {
                $model->applicationTemplateParams = [];
                $n1 = 0;
                foreach ($map['ApplicationTemplateParams'] as $item1) {
                    $model->applicationTemplateParams[$n1] = applicationTemplateParams::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
