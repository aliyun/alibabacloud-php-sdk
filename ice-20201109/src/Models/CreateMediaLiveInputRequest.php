<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateMediaLiveInputRequest\inputSettings;

class CreateMediaLiveInputRequest extends Model
{
    /**
     * @var inputSettings[]
     */
    public $inputSettings;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'inputSettings' => 'InputSettings',
        'name' => 'Name',
        'securityGroupIds' => 'SecurityGroupIds',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->inputSettings)) {
            Model::validateArray($this->inputSettings);
        }
        if (\is_array($this->securityGroupIds)) {
            Model::validateArray($this->securityGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputSettings) {
            if (\is_array($this->inputSettings)) {
                $res['InputSettings'] = [];
                $n1 = 0;
                foreach ($this->inputSettings as $item1) {
                    $res['InputSettings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->securityGroupIds) {
            if (\is_array($this->securityGroupIds)) {
                $res['SecurityGroupIds'] = [];
                $n1 = 0;
                foreach ($this->securityGroupIds as $item1) {
                    $res['SecurityGroupIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['InputSettings'])) {
            if (!empty($map['InputSettings'])) {
                $model->inputSettings = [];
                $n1 = 0;
                foreach ($map['InputSettings'] as $item1) {
                    $model->inputSettings[$n1++] = inputSettings::fromMap($item1);
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = [];
                $n1 = 0;
                foreach ($map['SecurityGroupIds'] as $item1) {
                    $model->securityGroupIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
