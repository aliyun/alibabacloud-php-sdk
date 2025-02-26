<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateServiceRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\AiServiceConfig;

class serviceConfigs extends Model
{
    /**
     * @var string[]
     */
    public $addresses;
    /**
     * @var AiServiceConfig
     */
    public $aiServiceConfig;
    /**
     * @var string
     */
    public $groupName;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var string
     */
    public $qualifier;
    protected $_name = [
        'addresses'       => 'addresses',
        'aiServiceConfig' => 'aiServiceConfig',
        'groupName'       => 'groupName',
        'name'            => 'name',
        'namespace'       => 'namespace',
        'qualifier'       => 'qualifier',
    ];

    public function validate()
    {
        if (\is_array($this->addresses)) {
            Model::validateArray($this->addresses);
        }
        if (null !== $this->aiServiceConfig) {
            $this->aiServiceConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addresses) {
            if (\is_array($this->addresses)) {
                $res['addresses'] = [];
                $n1               = 0;
                foreach ($this->addresses as $item1) {
                    $res['addresses'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->aiServiceConfig) {
            $res['aiServiceConfig'] = null !== $this->aiServiceConfig ? $this->aiServiceConfig->toArray($noStream) : $this->aiServiceConfig;
        }

        if (null !== $this->groupName) {
            $res['groupName'] = $this->groupName;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
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
        if (isset($map['addresses'])) {
            if (!empty($map['addresses'])) {
                $model->addresses = [];
                $n1               = 0;
                foreach ($map['addresses'] as $item1) {
                    $model->addresses[$n1++] = $item1;
                }
            }
        }

        if (isset($map['aiServiceConfig'])) {
            $model->aiServiceConfig = AiServiceConfig::fromMap($map['aiServiceConfig']);
        }

        if (isset($map['groupName'])) {
            $model->groupName = $map['groupName'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }

        return $model;
    }
}
