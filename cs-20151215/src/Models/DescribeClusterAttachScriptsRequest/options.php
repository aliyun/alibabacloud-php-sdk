<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAttachScriptsRequest;

use AlibabaCloud\Tea\Model;

class options extends Model
{
    /**
     * @description 需要安装的组件列表，默认为空，不安装。
     *
     * @var string[]
     */
    public $allowedClusterAddons;

    /**
     * @description 是否开启iptables，默认值true。
     *
     * @var bool
     */
    public $enableIptables;

    /**
     * @description flannel使用的网卡名。默认使用节点默认路由的网卡名。
     *
     * @var string
     */
    public $flannelIface;

    /**
     * @description 表示要接入的节点是否为GPU节点，默认为空。当前支持的GPU版本是Nvidia_Tesla_T4、Nvidia_Tesla_P4、Nvidia_Tesla_P100。
     *
     * @var string
     */
    public $gpuVersion;

    /**
     * @description 是否由edgeadm安装并检测Runtime，默认false。
     *
     * @var bool
     */
    public $manageRuntime;

    /**
     * @description 设置节点名。  - ""（默认值，表示使用主机名。） - "*"（表示随机生成6位的字符串。） - "*.XXX"（表示随机生成6位字符串+XXX后缀。）
     *
     * @var string
     */
    public $nodeNameOverride;

    /**
     * @description 是否使用静默模式安装。
     *
     * @var string
     */
    public $quiet;
    protected $_name = [
        'allowedClusterAddons' => 'allowedClusterAddons',
        'enableIptables'       => 'enableIptables',
        'flannelIface'         => 'flannelIface',
        'gpuVersion'           => 'gpuVersion',
        'manageRuntime'        => 'manageRuntime',
        'nodeNameOverride'     => 'nodeNameOverride',
        'quiet'                => 'quiet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowedClusterAddons) {
            $res['allowedClusterAddons'] = $this->allowedClusterAddons;
        }
        if (null !== $this->enableIptables) {
            $res['enableIptables'] = $this->enableIptables;
        }
        if (null !== $this->flannelIface) {
            $res['flannelIface'] = $this->flannelIface;
        }
        if (null !== $this->gpuVersion) {
            $res['gpuVersion'] = $this->gpuVersion;
        }
        if (null !== $this->manageRuntime) {
            $res['manageRuntime'] = $this->manageRuntime;
        }
        if (null !== $this->nodeNameOverride) {
            $res['nodeNameOverride'] = $this->nodeNameOverride;
        }
        if (null !== $this->quiet) {
            $res['quiet'] = $this->quiet;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return options
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['allowedClusterAddons'])) {
            if (!empty($map['allowedClusterAddons'])) {
                $model->allowedClusterAddons = $map['allowedClusterAddons'];
            }
        }
        if (isset($map['enableIptables'])) {
            $model->enableIptables = $map['enableIptables'];
        }
        if (isset($map['flannelIface'])) {
            $model->flannelIface = $map['flannelIface'];
        }
        if (isset($map['gpuVersion'])) {
            $model->gpuVersion = $map['gpuVersion'];
        }
        if (isset($map['manageRuntime'])) {
            $model->manageRuntime = $map['manageRuntime'];
        }
        if (isset($map['nodeNameOverride'])) {
            $model->nodeNameOverride = $map['nodeNameOverride'];
        }
        if (isset($map['quiet'])) {
            $model->quiet = $map['quiet'];
        }

        return $model;
    }
}
