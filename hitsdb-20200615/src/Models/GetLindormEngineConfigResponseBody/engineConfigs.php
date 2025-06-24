<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormEngineConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormEngineConfigResponseBody\engineConfigs\configFiles;

class engineConfigs extends Model
{
    /**
     * @var configFiles[]
     */
    public $configFiles;

    /**
     * @var string
     */
    public $engine;
    protected $_name = [
        'configFiles' => 'ConfigFiles',
        'engine' => 'Engine',
    ];

    public function validate()
    {
        if (\is_array($this->configFiles)) {
            Model::validateArray($this->configFiles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configFiles) {
            if (\is_array($this->configFiles)) {
                $res['ConfigFiles'] = [];
                $n1 = 0;
                foreach ($this->configFiles as $item1) {
                    $res['ConfigFiles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
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
        if (isset($map['ConfigFiles'])) {
            if (!empty($map['ConfigFiles'])) {
                $model->configFiles = [];
                $n1 = 0;
                foreach ($map['ConfigFiles'] as $item1) {
                    $model->configFiles[$n1] = configFiles::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        return $model;
    }
}
