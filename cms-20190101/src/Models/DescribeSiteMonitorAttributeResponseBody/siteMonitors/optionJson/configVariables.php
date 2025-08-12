<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson\configVariables\configVariables;

class configVariables extends Model
{
    /**
     * @var configVariables[]
     */
    public $configVariables;
    protected $_name = [
        'configVariables' => 'config_variables',
    ];

    public function validate()
    {
        if (\is_array($this->configVariables)) {
            Model::validateArray($this->configVariables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configVariables) {
            if (\is_array($this->configVariables)) {
                $res['config_variables'] = [];
                $n1 = 0;
                foreach ($this->configVariables as $item1) {
                    $res['config_variables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['config_variables'])) {
            if (!empty($map['config_variables'])) {
                $model->configVariables = [];
                $n1 = 0;
                foreach ($map['config_variables'] as $item1) {
                    $model->configVariables[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
