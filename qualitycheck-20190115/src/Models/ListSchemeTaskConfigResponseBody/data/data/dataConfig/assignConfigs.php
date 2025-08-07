<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data\dataConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data\dataConfig\assignConfigs\assignConfig;

class assignConfigs extends Model
{
    /**
     * @var assignConfig[]
     */
    public $assignConfig;
    protected $_name = [
        'assignConfig' => 'AssignConfig',
    ];

    public function validate()
    {
        if (\is_array($this->assignConfig)) {
            Model::validateArray($this->assignConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignConfig) {
            if (\is_array($this->assignConfig)) {
                $res['AssignConfig'] = [];
                $n1 = 0;
                foreach ($this->assignConfig as $item1) {
                    $res['AssignConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AssignConfig'])) {
            if (!empty($map['AssignConfig'])) {
                $model->assignConfig = [];
                $n1 = 0;
                foreach ($map['AssignConfig'] as $item1) {
                    $model->assignConfig[$n1] = assignConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
