<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormEngineConfigResponseBody\engineConfigs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormEngineConfigResponseBody\engineConfigs\configFiles\configItems;

class configFiles extends Model
{
    /**
     * @var configItems[]
     */
    public $configItems;

    /**
     * @var string
     */
    public $fileName;
    protected $_name = [
        'configItems' => 'ConfigItems',
        'fileName' => 'FileName',
    ];

    public function validate()
    {
        if (\is_array($this->configItems)) {
            Model::validateArray($this->configItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configItems) {
            if (\is_array($this->configItems)) {
                $res['ConfigItems'] = [];
                $n1 = 0;
                foreach ($this->configItems as $item1) {
                    $res['ConfigItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
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
        if (isset($map['ConfigItems'])) {
            if (!empty($map['ConfigItems'])) {
                $model->configItems = [];
                $n1 = 0;
                foreach ($map['ConfigItems'] as $item1) {
                    $model->configItems[$n1] = configItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        return $model;
    }
}
