<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\AckConfig\pvcs;
use AlibabaCloud\SDK\Emr\V20210320\Models\AckConfig\volumeMounts;
use AlibabaCloud\SDK\Emr\V20210320\Models\AckConfig\volumes;

class AckConfig extends Model
{
    /**
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
     * @var float
     */
    public $limitCpu;
    /**
     * @var float
     */
    public $limitMemory;
    /**
     * @var bool
     */
    public $mountHostCgroup;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var string
     */
    public $nodeAffinity;
    /**
     * @var Tag[]
     */
    public $nodeSelectors;
    /**
     * @var string
     */
    public $podAffinity;
    /**
     * @var string
     */
    public $podAntiAffinity;
    /**
     * @var string[]
     */
    public $preStartCommand;
    /**
     * @var pvcs[]
     */
    public $pvcs;
    /**
     * @var float
     */
    public $requestCpu;
    /**
     * @var float
     */
    public $requestMemory;
    /**
     * @var Toleration[]
     */
    public $tolerations;
    /**
     * @var volumeMounts[]
     */
    public $volumeMounts;
    /**
     * @var volumes[]
     */
    public $volumes;
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
        'nodeAffinity'         => 'NodeAffinity',
        'nodeSelectors'        => 'NodeSelectors',
        'podAffinity'          => 'PodAffinity',
        'podAntiAffinity'      => 'PodAntiAffinity',
        'preStartCommand'      => 'PreStartCommand',
        'pvcs'                 => 'Pvcs',
        'requestCpu'           => 'RequestCpu',
        'requestMemory'        => 'RequestMemory',
        'tolerations'          => 'Tolerations',
        'volumeMounts'         => 'VolumeMounts',
        'volumes'              => 'Volumes',
    ];

    public function validate()
    {
        if (\is_array($this->customAnnotations)) {
            Model::validateArray($this->customAnnotations);
        }
        if (\is_array($this->customLabels)) {
            Model::validateArray($this->customLabels);
        }
        if (\is_array($this->nodeSelectors)) {
            Model::validateArray($this->nodeSelectors);
        }
        if (\is_array($this->preStartCommand)) {
            Model::validateArray($this->preStartCommand);
        }
        if (\is_array($this->pvcs)) {
            Model::validateArray($this->pvcs);
        }
        if (\is_array($this->tolerations)) {
            Model::validateArray($this->tolerations);
        }
        if (\is_array($this->volumeMounts)) {
            Model::validateArray($this->volumeMounts);
        }
        if (\is_array($this->volumes)) {
            Model::validateArray($this->volumes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ackInstanceId) {
            $res['AckInstanceId'] = $this->ackInstanceId;
        }

        if (null !== $this->customAnnotations) {
            if (\is_array($this->customAnnotations)) {
                $res['CustomAnnotations'] = [];
                $n1                       = 0;
                foreach ($this->customAnnotations as $item1) {
                    $res['CustomAnnotations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->customLabels) {
            if (\is_array($this->customLabels)) {
                $res['CustomLabels'] = [];
                $n1                  = 0;
                foreach ($this->customLabels as $item1) {
                    $res['CustomLabels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->nodeAffinity) {
            $res['NodeAffinity'] = $this->nodeAffinity;
        }

        if (null !== $this->nodeSelectors) {
            if (\is_array($this->nodeSelectors)) {
                $res['NodeSelectors'] = [];
                $n1                   = 0;
                foreach ($this->nodeSelectors as $item1) {
                    $res['NodeSelectors'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->podAffinity) {
            $res['PodAffinity'] = $this->podAffinity;
        }

        if (null !== $this->podAntiAffinity) {
            $res['PodAntiAffinity'] = $this->podAntiAffinity;
        }

        if (null !== $this->preStartCommand) {
            if (\is_array($this->preStartCommand)) {
                $res['PreStartCommand'] = [];
                $n1                     = 0;
                foreach ($this->preStartCommand as $item1) {
                    $res['PreStartCommand'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->pvcs) {
            if (\is_array($this->pvcs)) {
                $res['Pvcs'] = [];
                $n1          = 0;
                foreach ($this->pvcs as $item1) {
                    $res['Pvcs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->tolerations)) {
                $res['Tolerations'] = [];
                $n1                 = 0;
                foreach ($this->tolerations as $item1) {
                    $res['Tolerations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->volumeMounts) {
            if (\is_array($this->volumeMounts)) {
                $res['VolumeMounts'] = [];
                $n1                  = 0;
                foreach ($this->volumeMounts as $item1) {
                    $res['VolumeMounts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->volumes) {
            if (\is_array($this->volumes)) {
                $res['Volumes'] = [];
                $n1             = 0;
                foreach ($this->volumes as $item1) {
                    $res['Volumes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AckInstanceId'])) {
            $model->ackInstanceId = $map['AckInstanceId'];
        }

        if (isset($map['CustomAnnotations'])) {
            if (!empty($map['CustomAnnotations'])) {
                $model->customAnnotations = [];
                $n1                       = 0;
                foreach ($map['CustomAnnotations'] as $item1) {
                    $model->customAnnotations[$n1++] = Tag::fromMap($item1);
                }
            }
        }

        if (isset($map['CustomLabels'])) {
            if (!empty($map['CustomLabels'])) {
                $model->customLabels = [];
                $n1                  = 0;
                foreach ($map['CustomLabels'] as $item1) {
                    $model->customLabels[$n1++] = Tag::fromMap($item1);
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

        if (isset($map['NodeAffinity'])) {
            $model->nodeAffinity = $map['NodeAffinity'];
        }

        if (isset($map['NodeSelectors'])) {
            if (!empty($map['NodeSelectors'])) {
                $model->nodeSelectors = [];
                $n1                   = 0;
                foreach ($map['NodeSelectors'] as $item1) {
                    $model->nodeSelectors[$n1++] = Tag::fromMap($item1);
                }
            }
        }

        if (isset($map['PodAffinity'])) {
            $model->podAffinity = $map['PodAffinity'];
        }

        if (isset($map['PodAntiAffinity'])) {
            $model->podAntiAffinity = $map['PodAntiAffinity'];
        }

        if (isset($map['PreStartCommand'])) {
            if (!empty($map['PreStartCommand'])) {
                $model->preStartCommand = [];
                $n1                     = 0;
                foreach ($map['PreStartCommand'] as $item1) {
                    $model->preStartCommand[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Pvcs'])) {
            if (!empty($map['Pvcs'])) {
                $model->pvcs = [];
                $n1          = 0;
                foreach ($map['Pvcs'] as $item1) {
                    $model->pvcs[$n1++] = pvcs::fromMap($item1);
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
                $n1                 = 0;
                foreach ($map['Tolerations'] as $item1) {
                    $model->tolerations[$n1++] = Toleration::fromMap($item1);
                }
            }
        }

        if (isset($map['VolumeMounts'])) {
            if (!empty($map['VolumeMounts'])) {
                $model->volumeMounts = [];
                $n1                  = 0;
                foreach ($map['VolumeMounts'] as $item1) {
                    $model->volumeMounts[$n1++] = volumeMounts::fromMap($item1);
                }
            }
        }

        if (isset($map['Volumes'])) {
            if (!empty($map['Volumes'])) {
                $model->volumes = [];
                $n1             = 0;
                foreach ($map['Volumes'] as $item1) {
                    $model->volumes[$n1++] = volumes::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
