<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\ModifyClusterAddonRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyClusterAddonRequest\addon\configSchema;

class addon extends Model
{
    /**
     * @var configSchema[]
     */
    public $configSchema;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'configSchema' => 'ConfigSchema',
        'name' => 'Name',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->configSchema)) {
            Model::validateArray($this->configSchema);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configSchema) {
            if (\is_array($this->configSchema)) {
                $res['ConfigSchema'] = [];
                $n1 = 0;
                foreach ($this->configSchema as $item1) {
                    $res['ConfigSchema'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['ConfigSchema'])) {
            if (!empty($map['ConfigSchema'])) {
                $model->configSchema = [];
                $n1 = 0;
                foreach ($map['ConfigSchema'] as $item1) {
                    $model->configSchema[$n1] = configSchema::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
