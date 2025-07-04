<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\volume;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\volume\configFileVolume\configFileToPath;

class configFileVolume extends Model
{
    /**
     * @var configFileToPath[]
     */
    public $configFileToPath;

    /**
     * @var int
     */
    public $defaultMode;
    protected $_name = [
        'configFileToPath' => 'ConfigFileToPath',
        'defaultMode' => 'DefaultMode',
    ];

    public function validate()
    {
        if (\is_array($this->configFileToPath)) {
            Model::validateArray($this->configFileToPath);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configFileToPath) {
            if (\is_array($this->configFileToPath)) {
                $res['ConfigFileToPath'] = [];
                $n1 = 0;
                foreach ($this->configFileToPath as $item1) {
                    $res['ConfigFileToPath'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->defaultMode) {
            $res['DefaultMode'] = $this->defaultMode;
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
        if (isset($map['ConfigFileToPath'])) {
            if (!empty($map['ConfigFileToPath'])) {
                $model->configFileToPath = [];
                $n1 = 0;
                foreach ($map['ConfigFileToPath'] as $item1) {
                    $model->configFileToPath[$n1++] = configFileToPath::fromMap($item1);
                }
            }
        }

        if (isset($map['DefaultMode'])) {
            $model->defaultMode = $map['DefaultMode'];
        }

        return $model;
    }
}
