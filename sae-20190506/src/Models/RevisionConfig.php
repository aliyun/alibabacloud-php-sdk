<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class RevisionConfig extends Model
{
    /**
     * @description This parameter is required.
     *
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
        'containers'        => 'Containers',
        'enableArmsMetrics' => 'EnableArmsMetrics',
        'webNetworkConfig'  => 'WebNetworkConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containers) {
            $res['Containers'] = [];
            if (null !== $this->containers && \is_array($this->containers)) {
                $n = 0;
                foreach ($this->containers as $item) {
                    $res['Containers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->enableArmsMetrics) {
            $res['EnableArmsMetrics'] = $this->enableArmsMetrics;
        }
        if (null !== $this->webNetworkConfig) {
            $res['WebNetworkConfig'] = null !== $this->webNetworkConfig ? $this->webNetworkConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RevisionConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Containers'])) {
            if (!empty($map['Containers'])) {
                $model->containers = [];
                $n                 = 0;
                foreach ($map['Containers'] as $item) {
                    $model->containers[$n++] = null !== $item ? Container::fromMap($item) : $item;
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
