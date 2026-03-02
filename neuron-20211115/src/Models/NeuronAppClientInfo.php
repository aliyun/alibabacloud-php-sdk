<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class NeuronAppClientInfo extends Model
{
    /**
     * @var string
     */
    public $appEntry;

    /**
     * @var int
     */
    public $appId;

    /**
     * @var MobiInfo
     */
    public $mobiInfo;

    /**
     * @var AppPluginInfo[]
     */
    public $pluginList;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var string
     */
    public $sidebar;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'appEntry' => 'appEntry',
        'appId' => 'appId',
        'mobiInfo' => 'mobiInfo',
        'pluginList' => 'pluginList',
        'productId' => 'productId',
        'sidebar' => 'sidebar',
        'version' => 'version',
    ];

    public function validate()
    {
        if (null !== $this->mobiInfo) {
            $this->mobiInfo->validate();
        }
        if (\is_array($this->pluginList)) {
            Model::validateArray($this->pluginList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appEntry) {
            $res['appEntry'] = $this->appEntry;
        }

        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->mobiInfo) {
            $res['mobiInfo'] = null !== $this->mobiInfo ? $this->mobiInfo->toArray($noStream) : $this->mobiInfo;
        }

        if (null !== $this->pluginList) {
            if (\is_array($this->pluginList)) {
                $res['pluginList'] = [];
                $n1 = 0;
                foreach ($this->pluginList as $item1) {
                    $res['pluginList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }

        if (null !== $this->sidebar) {
            $res['sidebar'] = $this->sidebar;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['appEntry'])) {
            $model->appEntry = $map['appEntry'];
        }

        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['mobiInfo'])) {
            $model->mobiInfo = MobiInfo::fromMap($map['mobiInfo']);
        }

        if (isset($map['pluginList'])) {
            if (!empty($map['pluginList'])) {
                $model->pluginList = [];
                $n1 = 0;
                foreach ($map['pluginList'] as $item1) {
                    $model->pluginList[$n1] = AppPluginInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }

        if (isset($map['sidebar'])) {
            $model->sidebar = $map['sidebar'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
