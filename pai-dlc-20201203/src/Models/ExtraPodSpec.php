<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class ExtraPodSpec extends Model
{
    /**
     * @var ContainerSpec[]
     */
    public $initContainers;

    /**
     * @var string[]
     */
    public $podAnnotations;

    /**
     * @var string[]
     */
    public $podLabels;

    /**
     * @var string[]
     */
    public $sharedVolumeMountPaths;

    /**
     * @var ContainerSpec[]
     */
    public $sideCarContainers;
    protected $_name = [
        'initContainers'         => 'InitContainers',
        'podAnnotations'         => 'PodAnnotations',
        'podLabels'              => 'PodLabels',
        'sharedVolumeMountPaths' => 'SharedVolumeMountPaths',
        'sideCarContainers'      => 'SideCarContainers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->initContainers) {
            $res['InitContainers'] = [];
            if (null !== $this->initContainers && \is_array($this->initContainers)) {
                $n = 0;
                foreach ($this->initContainers as $item) {
                    $res['InitContainers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->podAnnotations) {
            $res['PodAnnotations'] = $this->podAnnotations;
        }
        if (null !== $this->podLabels) {
            $res['PodLabels'] = $this->podLabels;
        }
        if (null !== $this->sharedVolumeMountPaths) {
            $res['SharedVolumeMountPaths'] = $this->sharedVolumeMountPaths;
        }
        if (null !== $this->sideCarContainers) {
            $res['SideCarContainers'] = [];
            if (null !== $this->sideCarContainers && \is_array($this->sideCarContainers)) {
                $n = 0;
                foreach ($this->sideCarContainers as $item) {
                    $res['SideCarContainers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExtraPodSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InitContainers'])) {
            if (!empty($map['InitContainers'])) {
                $model->initContainers = [];
                $n                     = 0;
                foreach ($map['InitContainers'] as $item) {
                    $model->initContainers[$n++] = null !== $item ? ContainerSpec::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PodAnnotations'])) {
            $model->podAnnotations = $map['PodAnnotations'];
        }
        if (isset($map['PodLabels'])) {
            $model->podLabels = $map['PodLabels'];
        }
        if (isset($map['SharedVolumeMountPaths'])) {
            if (!empty($map['SharedVolumeMountPaths'])) {
                $model->sharedVolumeMountPaths = $map['SharedVolumeMountPaths'];
            }
        }
        if (isset($map['SideCarContainers'])) {
            if (!empty($map['SideCarContainers'])) {
                $model->sideCarContainers = [];
                $n                        = 0;
                foreach ($map['SideCarContainers'] as $item) {
                    $model->sideCarContainers[$n++] = null !== $item ? ContainerSpec::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
