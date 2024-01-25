<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\SDK\Adp\V20210720\Models\GetInstanceInfoResponse\clusterTaints;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetInstanceInfoResponse\networkCards;
use AlibabaCloud\SDK\Adp\V20210720\Models\GetInstanceInfoResponse\taints;
use AlibabaCloud\Tea\Model;

class GetInstanceInfoResponse extends Model
{
    /**
     * @var string[]
     */
    public $annotations;

    /**
     * @var string
     */
    public $arch;

    /**
     * @var string[]
     */
    public $clusterLabels;

    /**
     * @var clusterTaints[]
     */
    public $clusterTaints;

    /**
     * @var string
     */
    public $cpu;

    /**
     * @var Disk[]
     */
    public $dataDisk;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $imageID;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $internetBandwidth;

    /**
     * @var string
     */
    public $kernel;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var string
     */
    public $macAddress;

    /**
     * @var string
     */
    public $memory;

    /**
     * @var networkCards[]
     */
    public $networkCards;

    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $osVersion;

    /**
     * @var string
     */
    public $privateIP;

    /**
     * @var string
     */
    public $publicIP;

    /**
     * @var string
     */
    public $rootPassword;

    /**
     * @var Disk[]
     */
    public $systemDisk;

    /**
     * @var string
     */
    public $systemInfo;

    /**
     * @var taints[]
     */
    public $taints;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'annotations'       => 'annotations',
        'arch'              => 'arch',
        'clusterLabels'     => 'clusterLabels',
        'clusterTaints'     => 'clusterTaints',
        'cpu'               => 'cpu',
        'dataDisk'          => 'dataDisk',
        'hostName'          => 'hostName',
        'identifier'        => 'identifier',
        'imageID'           => 'imageID',
        'instanceType'      => 'instanceType',
        'internetBandwidth' => 'internetBandwidth',
        'kernel'            => 'kernel',
        'labels'            => 'labels',
        'macAddress'        => 'macAddress',
        'memory'            => 'memory',
        'networkCards'      => 'networkCards',
        'os'                => 'os',
        'osVersion'         => 'osVersion',
        'privateIP'         => 'privateIP',
        'publicIP'          => 'publicIP',
        'rootPassword'      => 'rootPassword',
        'systemDisk'        => 'systemDisk',
        'systemInfo'        => 'systemInfo',
        'taints'            => 'taints',
        'uid'               => 'uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotations) {
            $res['annotations'] = $this->annotations;
        }
        if (null !== $this->arch) {
            $res['arch'] = $this->arch;
        }
        if (null !== $this->clusterLabels) {
            $res['clusterLabels'] = $this->clusterLabels;
        }
        if (null !== $this->clusterTaints) {
            $res['clusterTaints'] = [];
            if (null !== $this->clusterTaints && \is_array($this->clusterTaints)) {
                $n = 0;
                foreach ($this->clusterTaints as $item) {
                    $res['clusterTaints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }
        if (null !== $this->dataDisk) {
            $res['dataDisk'] = [];
            if (null !== $this->dataDisk && \is_array($this->dataDisk)) {
                $n = 0;
                foreach ($this->dataDisk as $item) {
                    $res['dataDisk'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hostName) {
            $res['hostName'] = $this->hostName;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->imageID) {
            $res['imageID'] = $this->imageID;
        }
        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }
        if (null !== $this->internetBandwidth) {
            $res['internetBandwidth'] = $this->internetBandwidth;
        }
        if (null !== $this->kernel) {
            $res['kernel'] = $this->kernel;
        }
        if (null !== $this->labels) {
            $res['labels'] = $this->labels;
        }
        if (null !== $this->macAddress) {
            $res['macAddress'] = $this->macAddress;
        }
        if (null !== $this->memory) {
            $res['memory'] = $this->memory;
        }
        if (null !== $this->networkCards) {
            $res['networkCards'] = [];
            if (null !== $this->networkCards && \is_array($this->networkCards)) {
                $n = 0;
                foreach ($this->networkCards as $item) {
                    $res['networkCards'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->os) {
            $res['os'] = $this->os;
        }
        if (null !== $this->osVersion) {
            $res['osVersion'] = $this->osVersion;
        }
        if (null !== $this->privateIP) {
            $res['privateIP'] = $this->privateIP;
        }
        if (null !== $this->publicIP) {
            $res['publicIP'] = $this->publicIP;
        }
        if (null !== $this->rootPassword) {
            $res['rootPassword'] = $this->rootPassword;
        }
        if (null !== $this->systemDisk) {
            $res['systemDisk'] = [];
            if (null !== $this->systemDisk && \is_array($this->systemDisk)) {
                $n = 0;
                foreach ($this->systemDisk as $item) {
                    $res['systemDisk'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->systemInfo) {
            $res['systemInfo'] = $this->systemInfo;
        }
        if (null !== $this->taints) {
            $res['taints'] = [];
            if (null !== $this->taints && \is_array($this->taints)) {
                $n = 0;
                foreach ($this->taints as $item) {
                    $res['taints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceInfoResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['annotations'])) {
            $model->annotations = $map['annotations'];
        }
        if (isset($map['arch'])) {
            $model->arch = $map['arch'];
        }
        if (isset($map['clusterLabels'])) {
            $model->clusterLabels = $map['clusterLabels'];
        }
        if (isset($map['clusterTaints'])) {
            if (!empty($map['clusterTaints'])) {
                $model->clusterTaints = [];
                $n                    = 0;
                foreach ($map['clusterTaints'] as $item) {
                    $model->clusterTaints[$n++] = null !== $item ? clusterTaints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }
        if (isset($map['dataDisk'])) {
            if (!empty($map['dataDisk'])) {
                $model->dataDisk = [];
                $n               = 0;
                foreach ($map['dataDisk'] as $item) {
                    $model->dataDisk[$n++] = null !== $item ? Disk::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['hostName'])) {
            $model->hostName = $map['hostName'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['imageID'])) {
            $model->imageID = $map['imageID'];
        }
        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }
        if (isset($map['internetBandwidth'])) {
            $model->internetBandwidth = $map['internetBandwidth'];
        }
        if (isset($map['kernel'])) {
            $model->kernel = $map['kernel'];
        }
        if (isset($map['labels'])) {
            $model->labels = $map['labels'];
        }
        if (isset($map['macAddress'])) {
            $model->macAddress = $map['macAddress'];
        }
        if (isset($map['memory'])) {
            $model->memory = $map['memory'];
        }
        if (isset($map['networkCards'])) {
            if (!empty($map['networkCards'])) {
                $model->networkCards = [];
                $n                   = 0;
                foreach ($map['networkCards'] as $item) {
                    $model->networkCards[$n++] = null !== $item ? networkCards::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['os'])) {
            $model->os = $map['os'];
        }
        if (isset($map['osVersion'])) {
            $model->osVersion = $map['osVersion'];
        }
        if (isset($map['privateIP'])) {
            $model->privateIP = $map['privateIP'];
        }
        if (isset($map['publicIP'])) {
            $model->publicIP = $map['publicIP'];
        }
        if (isset($map['rootPassword'])) {
            $model->rootPassword = $map['rootPassword'];
        }
        if (isset($map['systemDisk'])) {
            if (!empty($map['systemDisk'])) {
                $model->systemDisk = [];
                $n                 = 0;
                foreach ($map['systemDisk'] as $item) {
                    $model->systemDisk[$n++] = null !== $item ? Disk::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['systemInfo'])) {
            $model->systemInfo = $map['systemInfo'];
        }
        if (isset($map['taints'])) {
            if (!empty($map['taints'])) {
                $model->taints = [];
                $n             = 0;
                foreach ($map['taints'] as $item) {
                    $model->taints[$n++] = null !== $item ? taints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
