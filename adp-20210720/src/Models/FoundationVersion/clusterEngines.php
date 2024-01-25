<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\FoundationVersion;

use AlibabaCloud\SDK\Adp\V20210720\Models\FoundationVersion\clusterEngines\infrastructureStatements;
use AlibabaCloud\SDK\Adp\V20210720\Models\FoundationVersion\clusterEngines\networkList;
use AlibabaCloud\SDK\Adp\V20210720\Models\FoundationVersion\clusterEngines\packages;
use AlibabaCloud\SDK\Adp\V20210720\Models\FoundationVersion\clusterEngines\packageTools;
use AlibabaCloud\Tea\Model;

class clusterEngines extends Model
{
    /**
     * @var infrastructureStatements[]
     */
    public $infrastructureStatements;

    /**
     * @var networkList[]
     */
    public $networkList;

    /**
     * @var packageTools[]
     */
    public $packageTools;

    /**
     * @var packages[]
     */
    public $packages;

    /**
     * @example ENUM:["TRIDENT","ACK-D"]
     *
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'infrastructureStatements' => 'infrastructureStatements',
        'networkList'              => 'networkList',
        'packageTools'             => 'packageTools',
        'packages'                 => 'packages',
        'type'                     => 'type',
        'version'                  => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->infrastructureStatements) {
            $res['infrastructureStatements'] = [];
            if (null !== $this->infrastructureStatements && \is_array($this->infrastructureStatements)) {
                $n = 0;
                foreach ($this->infrastructureStatements as $item) {
                    $res['infrastructureStatements'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->networkList) {
            $res['networkList'] = [];
            if (null !== $this->networkList && \is_array($this->networkList)) {
                $n = 0;
                foreach ($this->networkList as $item) {
                    $res['networkList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->packageTools) {
            $res['packageTools'] = [];
            if (null !== $this->packageTools && \is_array($this->packageTools)) {
                $n = 0;
                foreach ($this->packageTools as $item) {
                    $res['packageTools'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->packages) {
            $res['packages'] = [];
            if (null !== $this->packages && \is_array($this->packages)) {
                $n = 0;
                foreach ($this->packages as $item) {
                    $res['packages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterEngines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['infrastructureStatements'])) {
            if (!empty($map['infrastructureStatements'])) {
                $model->infrastructureStatements = [];
                $n                               = 0;
                foreach ($map['infrastructureStatements'] as $item) {
                    $model->infrastructureStatements[$n++] = null !== $item ? infrastructureStatements::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['networkList'])) {
            if (!empty($map['networkList'])) {
                $model->networkList = [];
                $n                  = 0;
                foreach ($map['networkList'] as $item) {
                    $model->networkList[$n++] = null !== $item ? networkList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['packageTools'])) {
            if (!empty($map['packageTools'])) {
                $model->packageTools = [];
                $n                   = 0;
                foreach ($map['packageTools'] as $item) {
                    $model->packageTools[$n++] = null !== $item ? packageTools::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['packages'])) {
            if (!empty($map['packages'])) {
                $model->packages = [];
                $n               = 0;
                foreach ($map['packages'] as $item) {
                    $model->packages[$n++] = null !== $item ? packages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
