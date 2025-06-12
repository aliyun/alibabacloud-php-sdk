<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\ModifyApplicationSpecRequest;

use AlibabaCloud\Dara\Model;

class instanceSpec extends Model
{
    /**
     * @var mixed[]
     */
    public $configuration;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'configuration' => 'Configuration',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->configuration)) {
            Model::validateArray($this->configuration);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configuration) {
            if (\is_array($this->configuration)) {
                $res['Configuration'] = [];
                foreach ($this->configuration as $key1 => $value1) {
                    $res['Configuration'][$key1] = $value1;
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
        if (isset($map['Configuration'])) {
            if (!empty($map['Configuration'])) {
                $model->configuration = [];
                foreach ($map['Configuration'] as $key1 => $value1) {
                    $model->configuration[$key1] = $value1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
