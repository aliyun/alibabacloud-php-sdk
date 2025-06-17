<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class RevisionConfig extends Model
{
    /**
     * @var Container[]
     */
    public $containers;

    /**
     * @var bool
     */
    public $enableArmsMetrics;

    /**
     * @var WebNetworkConfig
     */
    public $webNetworkConfig;
    protected $_name = [
        'containers' => 'Containers',
        'enableArmsMetrics' => 'EnableArmsMetrics',
        'webNetworkConfig' => 'WebNetworkConfig',
    ];

    public function validate()
    {
        if (\is_array($this->containers)) {
            Model::validateArray($this->containers);
        }
        if (null !== $this->webNetworkConfig) {
            $this->webNetworkConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containers) {
            if (\is_array($this->containers)) {
                $res['Containers'] = [];
                $n1 = 0;
                foreach ($this->containers as $item1) {
                    $res['Containers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enableArmsMetrics) {
            $res['EnableArmsMetrics'] = $this->enableArmsMetrics;
        }

        if (null !== $this->webNetworkConfig) {
            $res['WebNetworkConfig'] = null !== $this->webNetworkConfig ? $this->webNetworkConfig->toArray($noStream) : $this->webNetworkConfig;
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
        if (isset($map['Containers'])) {
            if (!empty($map['Containers'])) {
                $model->containers = [];
                $n1 = 0;
                foreach ($map['Containers'] as $item1) {
                    $model->containers[$n1] = Container::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EnableArmsMetrics'])) {
            $model->enableArmsMetrics = $map['EnableArmsMetrics'];
        }

        if (isset($map['WebNetworkConfig'])) {
            $model->webNetworkConfig = WebNetworkConfig::fromMap($map['WebNetworkConfig']);
        }

        return $model;
    }
}
