<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\KubeletConfig\reservedMemory;
use AlibabaCloud\SDK\CS\V20151215\Models\KubeletConfig\tracing;

class KubeletConfig extends Model
{
    /**
     * @var string[]
     */
    public $allowedUnsafeSysctls;

    /**
     * @var string[]
     */
    public $clusterDNS;

    /**
     * @var int
     */
    public $containerLogMaxFiles;

    /**
     * @var string
     */
    public $containerLogMaxSize;

    /**
     * @var int
     */
    public $containerLogMaxWorkers;

    /**
     * @var string
     */
    public $containerLogMonitorInterval;

    /**
     * @var bool
     */
    public $cpuCFSQuota;

    /**
     * @var string
     */
    public $cpuCFSQuotaPeriod;

    /**
     * @var string
     */
    public $cpuManagerPolicy;

    /**
     * @var int
     */
    public $eventBurst;

    /**
     * @var int
     */
    public $eventRecordQPS;

    /**
     * @var mixed[]
     */
    public $evictionHard;

    /**
     * @var mixed[]
     */
    public $evictionSoft;

    /**
     * @var mixed[]
     */
    public $evictionSoftGracePeriod;

    /**
     * @var mixed[]
     */
    public $featureGates;

    /**
     * @var int
     */
    public $imageGCHighThresholdPercent;

    /**
     * @var int
     */
    public $imageGCLowThresholdPercent;

    /**
     * @var int
     */
    public $kubeAPIBurst;

    /**
     * @var int
     */
    public $kubeAPIQPS;

    /**
     * @var mixed[]
     */
    public $kubeReserved;

    /**
     * @var int
     */
    public $maxPods;

    /**
     * @var string
     */
    public $memoryManagerPolicy;

    /**
     * @var int
     */
    public $podPidsLimit;

    /**
     * @var int
     */
    public $readOnlyPort;

    /**
     * @var int
     */
    public $registryBurst;

    /**
     * @var int
     */
    public $registryPullQPS;

    /**
     * @var reservedMemory[]
     */
    public $reservedMemory;

    /**
     * @var bool
     */
    public $serializeImagePulls;

    /**
     * @var mixed[]
     */
    public $systemReserved;

    /**
     * @var string
     */
    public $topologyManagerPolicy;

    /**
     * @var tracing
     */
    public $tracing;
    protected $_name = [
        'allowedUnsafeSysctls' => 'allowedUnsafeSysctls',
        'clusterDNS' => 'clusterDNS',
        'containerLogMaxFiles' => 'containerLogMaxFiles',
        'containerLogMaxSize' => 'containerLogMaxSize',
        'containerLogMaxWorkers' => 'containerLogMaxWorkers',
        'containerLogMonitorInterval' => 'containerLogMonitorInterval',
        'cpuCFSQuota' => 'cpuCFSQuota',
        'cpuCFSQuotaPeriod' => 'cpuCFSQuotaPeriod',
        'cpuManagerPolicy' => 'cpuManagerPolicy',
        'eventBurst' => 'eventBurst',
        'eventRecordQPS' => 'eventRecordQPS',
        'evictionHard' => 'evictionHard',
        'evictionSoft' => 'evictionSoft',
        'evictionSoftGracePeriod' => 'evictionSoftGracePeriod',
        'featureGates' => 'featureGates',
        'imageGCHighThresholdPercent' => 'imageGCHighThresholdPercent',
        'imageGCLowThresholdPercent' => 'imageGCLowThresholdPercent',
        'kubeAPIBurst' => 'kubeAPIBurst',
        'kubeAPIQPS' => 'kubeAPIQPS',
        'kubeReserved' => 'kubeReserved',
        'maxPods' => 'maxPods',
        'memoryManagerPolicy' => 'memoryManagerPolicy',
        'podPidsLimit' => 'podPidsLimit',
        'readOnlyPort' => 'readOnlyPort',
        'registryBurst' => 'registryBurst',
        'registryPullQPS' => 'registryPullQPS',
        'reservedMemory' => 'reservedMemory',
        'serializeImagePulls' => 'serializeImagePulls',
        'systemReserved' => 'systemReserved',
        'topologyManagerPolicy' => 'topologyManagerPolicy',
        'tracing' => 'tracing',
    ];

    public function validate()
    {
        if (\is_array($this->allowedUnsafeSysctls)) {
            Model::validateArray($this->allowedUnsafeSysctls);
        }
        if (\is_array($this->clusterDNS)) {
            Model::validateArray($this->clusterDNS);
        }
        if (\is_array($this->evictionHard)) {
            Model::validateArray($this->evictionHard);
        }
        if (\is_array($this->evictionSoft)) {
            Model::validateArray($this->evictionSoft);
        }
        if (\is_array($this->evictionSoftGracePeriod)) {
            Model::validateArray($this->evictionSoftGracePeriod);
        }
        if (\is_array($this->featureGates)) {
            Model::validateArray($this->featureGates);
        }
        if (\is_array($this->kubeReserved)) {
            Model::validateArray($this->kubeReserved);
        }
        if (\is_array($this->reservedMemory)) {
            Model::validateArray($this->reservedMemory);
        }
        if (\is_array($this->systemReserved)) {
            Model::validateArray($this->systemReserved);
        }
        if (null !== $this->tracing) {
            $this->tracing->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedUnsafeSysctls) {
            if (\is_array($this->allowedUnsafeSysctls)) {
                $res['allowedUnsafeSysctls'] = [];
                $n1 = 0;
                foreach ($this->allowedUnsafeSysctls as $item1) {
                    $res['allowedUnsafeSysctls'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clusterDNS) {
            if (\is_array($this->clusterDNS)) {
                $res['clusterDNS'] = [];
                $n1 = 0;
                foreach ($this->clusterDNS as $item1) {
                    $res['clusterDNS'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->containerLogMaxFiles) {
            $res['containerLogMaxFiles'] = $this->containerLogMaxFiles;
        }

        if (null !== $this->containerLogMaxSize) {
            $res['containerLogMaxSize'] = $this->containerLogMaxSize;
        }

        if (null !== $this->containerLogMaxWorkers) {
            $res['containerLogMaxWorkers'] = $this->containerLogMaxWorkers;
        }

        if (null !== $this->containerLogMonitorInterval) {
            $res['containerLogMonitorInterval'] = $this->containerLogMonitorInterval;
        }

        if (null !== $this->cpuCFSQuota) {
            $res['cpuCFSQuota'] = $this->cpuCFSQuota;
        }

        if (null !== $this->cpuCFSQuotaPeriod) {
            $res['cpuCFSQuotaPeriod'] = $this->cpuCFSQuotaPeriod;
        }

        if (null !== $this->cpuManagerPolicy) {
            $res['cpuManagerPolicy'] = $this->cpuManagerPolicy;
        }

        if (null !== $this->eventBurst) {
            $res['eventBurst'] = $this->eventBurst;
        }

        if (null !== $this->eventRecordQPS) {
            $res['eventRecordQPS'] = $this->eventRecordQPS;
        }

        if (null !== $this->evictionHard) {
            if (\is_array($this->evictionHard)) {
                $res['evictionHard'] = [];
                foreach ($this->evictionHard as $key1 => $value1) {
                    $res['evictionHard'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->evictionSoft) {
            if (\is_array($this->evictionSoft)) {
                $res['evictionSoft'] = [];
                foreach ($this->evictionSoft as $key1 => $value1) {
                    $res['evictionSoft'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->evictionSoftGracePeriod) {
            if (\is_array($this->evictionSoftGracePeriod)) {
                $res['evictionSoftGracePeriod'] = [];
                foreach ($this->evictionSoftGracePeriod as $key1 => $value1) {
                    $res['evictionSoftGracePeriod'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->featureGates) {
            if (\is_array($this->featureGates)) {
                $res['featureGates'] = [];
                foreach ($this->featureGates as $key1 => $value1) {
                    $res['featureGates'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->imageGCHighThresholdPercent) {
            $res['imageGCHighThresholdPercent'] = $this->imageGCHighThresholdPercent;
        }

        if (null !== $this->imageGCLowThresholdPercent) {
            $res['imageGCLowThresholdPercent'] = $this->imageGCLowThresholdPercent;
        }

        if (null !== $this->kubeAPIBurst) {
            $res['kubeAPIBurst'] = $this->kubeAPIBurst;
        }

        if (null !== $this->kubeAPIQPS) {
            $res['kubeAPIQPS'] = $this->kubeAPIQPS;
        }

        if (null !== $this->kubeReserved) {
            if (\is_array($this->kubeReserved)) {
                $res['kubeReserved'] = [];
                foreach ($this->kubeReserved as $key1 => $value1) {
                    $res['kubeReserved'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->maxPods) {
            $res['maxPods'] = $this->maxPods;
        }

        if (null !== $this->memoryManagerPolicy) {
            $res['memoryManagerPolicy'] = $this->memoryManagerPolicy;
        }

        if (null !== $this->podPidsLimit) {
            $res['podPidsLimit'] = $this->podPidsLimit;
        }

        if (null !== $this->readOnlyPort) {
            $res['readOnlyPort'] = $this->readOnlyPort;
        }

        if (null !== $this->registryBurst) {
            $res['registryBurst'] = $this->registryBurst;
        }

        if (null !== $this->registryPullQPS) {
            $res['registryPullQPS'] = $this->registryPullQPS;
        }

        if (null !== $this->reservedMemory) {
            if (\is_array($this->reservedMemory)) {
                $res['reservedMemory'] = [];
                $n1 = 0;
                foreach ($this->reservedMemory as $item1) {
                    $res['reservedMemory'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serializeImagePulls) {
            $res['serializeImagePulls'] = $this->serializeImagePulls;
        }

        if (null !== $this->systemReserved) {
            if (\is_array($this->systemReserved)) {
                $res['systemReserved'] = [];
                foreach ($this->systemReserved as $key1 => $value1) {
                    $res['systemReserved'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->topologyManagerPolicy) {
            $res['topologyManagerPolicy'] = $this->topologyManagerPolicy;
        }

        if (null !== $this->tracing) {
            $res['tracing'] = null !== $this->tracing ? $this->tracing->toArray($noStream) : $this->tracing;
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
        if (isset($map['allowedUnsafeSysctls'])) {
            if (!empty($map['allowedUnsafeSysctls'])) {
                $model->allowedUnsafeSysctls = [];
                $n1 = 0;
                foreach ($map['allowedUnsafeSysctls'] as $item1) {
                    $model->allowedUnsafeSysctls[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['clusterDNS'])) {
            if (!empty($map['clusterDNS'])) {
                $model->clusterDNS = [];
                $n1 = 0;
                foreach ($map['clusterDNS'] as $item1) {
                    $model->clusterDNS[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['containerLogMaxFiles'])) {
            $model->containerLogMaxFiles = $map['containerLogMaxFiles'];
        }

        if (isset($map['containerLogMaxSize'])) {
            $model->containerLogMaxSize = $map['containerLogMaxSize'];
        }

        if (isset($map['containerLogMaxWorkers'])) {
            $model->containerLogMaxWorkers = $map['containerLogMaxWorkers'];
        }

        if (isset($map['containerLogMonitorInterval'])) {
            $model->containerLogMonitorInterval = $map['containerLogMonitorInterval'];
        }

        if (isset($map['cpuCFSQuota'])) {
            $model->cpuCFSQuota = $map['cpuCFSQuota'];
        }

        if (isset($map['cpuCFSQuotaPeriod'])) {
            $model->cpuCFSQuotaPeriod = $map['cpuCFSQuotaPeriod'];
        }

        if (isset($map['cpuManagerPolicy'])) {
            $model->cpuManagerPolicy = $map['cpuManagerPolicy'];
        }

        if (isset($map['eventBurst'])) {
            $model->eventBurst = $map['eventBurst'];
        }

        if (isset($map['eventRecordQPS'])) {
            $model->eventRecordQPS = $map['eventRecordQPS'];
        }

        if (isset($map['evictionHard'])) {
            if (!empty($map['evictionHard'])) {
                $model->evictionHard = [];
                foreach ($map['evictionHard'] as $key1 => $value1) {
                    $model->evictionHard[$key1] = $value1;
                }
            }
        }

        if (isset($map['evictionSoft'])) {
            if (!empty($map['evictionSoft'])) {
                $model->evictionSoft = [];
                foreach ($map['evictionSoft'] as $key1 => $value1) {
                    $model->evictionSoft[$key1] = $value1;
                }
            }
        }

        if (isset($map['evictionSoftGracePeriod'])) {
            if (!empty($map['evictionSoftGracePeriod'])) {
                $model->evictionSoftGracePeriod = [];
                foreach ($map['evictionSoftGracePeriod'] as $key1 => $value1) {
                    $model->evictionSoftGracePeriod[$key1] = $value1;
                }
            }
        }

        if (isset($map['featureGates'])) {
            if (!empty($map['featureGates'])) {
                $model->featureGates = [];
                foreach ($map['featureGates'] as $key1 => $value1) {
                    $model->featureGates[$key1] = $value1;
                }
            }
        }

        if (isset($map['imageGCHighThresholdPercent'])) {
            $model->imageGCHighThresholdPercent = $map['imageGCHighThresholdPercent'];
        }

        if (isset($map['imageGCLowThresholdPercent'])) {
            $model->imageGCLowThresholdPercent = $map['imageGCLowThresholdPercent'];
        }

        if (isset($map['kubeAPIBurst'])) {
            $model->kubeAPIBurst = $map['kubeAPIBurst'];
        }

        if (isset($map['kubeAPIQPS'])) {
            $model->kubeAPIQPS = $map['kubeAPIQPS'];
        }

        if (isset($map['kubeReserved'])) {
            if (!empty($map['kubeReserved'])) {
                $model->kubeReserved = [];
                foreach ($map['kubeReserved'] as $key1 => $value1) {
                    $model->kubeReserved[$key1] = $value1;
                }
            }
        }

        if (isset($map['maxPods'])) {
            $model->maxPods = $map['maxPods'];
        }

        if (isset($map['memoryManagerPolicy'])) {
            $model->memoryManagerPolicy = $map['memoryManagerPolicy'];
        }

        if (isset($map['podPidsLimit'])) {
            $model->podPidsLimit = $map['podPidsLimit'];
        }

        if (isset($map['readOnlyPort'])) {
            $model->readOnlyPort = $map['readOnlyPort'];
        }

        if (isset($map['registryBurst'])) {
            $model->registryBurst = $map['registryBurst'];
        }

        if (isset($map['registryPullQPS'])) {
            $model->registryPullQPS = $map['registryPullQPS'];
        }

        if (isset($map['reservedMemory'])) {
            if (!empty($map['reservedMemory'])) {
                $model->reservedMemory = [];
                $n1 = 0;
                foreach ($map['reservedMemory'] as $item1) {
                    $model->reservedMemory[$n1] = reservedMemory::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['serializeImagePulls'])) {
            $model->serializeImagePulls = $map['serializeImagePulls'];
        }

        if (isset($map['systemReserved'])) {
            if (!empty($map['systemReserved'])) {
                $model->systemReserved = [];
                foreach ($map['systemReserved'] as $key1 => $value1) {
                    $model->systemReserved[$key1] = $value1;
                }
            }
        }

        if (isset($map['topologyManagerPolicy'])) {
            $model->topologyManagerPolicy = $map['topologyManagerPolicy'];
        }

        if (isset($map['tracing'])) {
            $model->tracing = tracing::fromMap($map['tracing']);
        }

        return $model;
    }
}
