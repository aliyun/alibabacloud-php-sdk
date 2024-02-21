<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class AckConfig extends Model
{
    /**
     * @description ack集群id
     *
     * @var string
     */
    public $ackInstanceId;

    /**
     * @var Tag[]
     */
    public $customAnnotations;

    /**
     * @var Tag[]
     */
    public $customLabels;

    /**
     * @var int
     */
    public $dataDiskSize;

    /**
     * @var string
     */
    public $dataDiskStorageClass;

    /**
     * @description Pod的CPU限制值。
     *
     * @var float
     */
    public $limitCpu;

    /**
     * @description Pod的内存限制值。
     *
     * @var float
     */
    public $limitMemory;

    /**
     * @var bool
     */
    public $mountHostCgroup;

    /**
     * @description ack 命名空间
     *
     * @var string
     */
    public $namespace;

    /**
     * @description ack的节点标签限制
     *
     * @var Tag[]
     */
    public $nodeSelectors;

    /**
     * @description Pod的CPU请求值
     *
     * @var float
     */
    public $requestCpu;

    /**
     * @description Pod的内存请求值。
     *
     * @var float
     */
    public $requestMemory;

    /**
     * @description ack的节点污点容忍
     *
     * @var Toleration[]
     */
    public $tolerations;
    protected $_name = [
        'ackInstanceId'        => 'AckInstanceId',
        'customAnnotations'    => 'CustomAnnotations',
        'customLabels'         => 'CustomLabels',
        'dataDiskSize'         => 'DataDiskSize',
        'dataDiskStorageClass' => 'DataDiskStorageClass',
        'limitCpu'             => 'LimitCpu',
        'limitMemory'          => 'LimitMemory',
        'mountHostCgroup'      => 'MountHostCgroup',
        'namespace'            => 'Namespace',
        'nodeSelectors'        => 'NodeSelectors',
        'requestCpu'           => 'RequestCpu',
        'requestMemory'        => 'RequestMemory',
        'tolerations'          => 'Tolerations',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ackInstanceId) {
            $res['AckInstanceId'] = $this->ackInstanceId;
        }
        if (null !== $this->customAnnotations) {
            $res['CustomAnnotations'] = [];
            if (null !== $this->customAnnotations && \is_array($this->customAnnotations)) {
                $n = 0;
                foreach ($this->customAnnotations as $item) {
                    $res['CustomAnnotations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->customLabels) {
            $res['CustomLabels'] = [];
            if (null !== $this->customLabels && \is_array($this->customLabels)) {
                $n = 0;
                foreach ($this->customLabels as $item) {
                    $res['CustomLabels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }
        if (null !== $this->dataDiskStorageClass) {
            $res['DataDiskStorageClass'] = $this->dataDiskStorageClass;
        }
        if (null !== $this->limitCpu) {
            $res['LimitCpu'] = $this->limitCpu;
        }
        if (null !== $this->limitMemory) {
            $res['LimitMemory'] = $this->limitMemory;
        }
        if (null !== $this->mountHostCgroup) {
            $res['MountHostCgroup'] = $this->mountHostCgroup;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->nodeSelectors) {
            $res['NodeSelectors'] = [];
            if (null !== $this->nodeSelectors && \is_array($this->nodeSelectors)) {
                $n = 0;
                foreach ($this->nodeSelectors as $item) {
                    $res['NodeSelectors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestCpu) {
            $res['RequestCpu'] = $this->requestCpu;
        }
        if (null !== $this->requestMemory) {
            $res['RequestMemory'] = $this->requestMemory;
        }
        if (null !== $this->tolerations) {
            $res['Tolerations'] = [];
            if (null !== $this->tolerations && \is_array($this->tolerations)) {
                $n = 0;
                foreach ($this->tolerations as $item) {
                    $res['Tolerations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AckConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AckInstanceId'])) {
            $model->ackInstanceId = $map['AckInstanceId'];
        }
        if (isset($map['CustomAnnotations'])) {
            if (!empty($map['CustomAnnotations'])) {
                $model->customAnnotations = [];
                $n                        = 0;
                foreach ($map['CustomAnnotations'] as $item) {
                    $model->customAnnotations[$n++] = null !== $item ? Tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CustomLabels'])) {
            if (!empty($map['CustomLabels'])) {
                $model->customLabels = [];
                $n                   = 0;
                foreach ($map['CustomLabels'] as $item) {
                    $model->customLabels[$n++] = null !== $item ? Tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }
        if (isset($map['DataDiskStorageClass'])) {
            $model->dataDiskStorageClass = $map['DataDiskStorageClass'];
        }
        if (isset($map['LimitCpu'])) {
            $model->limitCpu = $map['LimitCpu'];
        }
        if (isset($map['LimitMemory'])) {
            $model->limitMemory = $map['LimitMemory'];
        }
        if (isset($map['MountHostCgroup'])) {
            $model->mountHostCgroup = $map['MountHostCgroup'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NodeSelectors'])) {
            if (!empty($map['NodeSelectors'])) {
                $model->nodeSelectors = [];
                $n                    = 0;
                foreach ($map['NodeSelectors'] as $item) {
                    $model->nodeSelectors[$n++] = null !== $item ? Tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestCpu'])) {
            $model->requestCpu = $map['RequestCpu'];
        }
        if (isset($map['RequestMemory'])) {
            $model->requestMemory = $map['RequestMemory'];
        }
        if (isset($map['Tolerations'])) {
            if (!empty($map['Tolerations'])) {
                $model->tolerations = [];
                $n                  = 0;
                foreach ($map['Tolerations'] as $item) {
                    $model->tolerations[$n++] = null !== $item ? Toleration::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
