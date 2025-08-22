<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class ExtraPodSpec extends Model
{
    /**
     * @var ContainerSpec[]
     */
    public $initContainers;

    /**
     * @var Lifecycle
     */
    public $lifecycle;

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
        'initContainers' => 'InitContainers',
        'lifecycle' => 'Lifecycle',
        'podAnnotations' => 'PodAnnotations',
        'podLabels' => 'PodLabels',
        'sharedVolumeMountPaths' => 'SharedVolumeMountPaths',
        'sideCarContainers' => 'SideCarContainers',
    ];

    public function validate()
    {
        if (\is_array($this->initContainers)) {
            Model::validateArray($this->initContainers);
        }
        if (null !== $this->lifecycle) {
            $this->lifecycle->validate();
        }
        if (\is_array($this->podAnnotations)) {
            Model::validateArray($this->podAnnotations);
        }
        if (\is_array($this->podLabels)) {
            Model::validateArray($this->podLabels);
        }
        if (\is_array($this->sharedVolumeMountPaths)) {
            Model::validateArray($this->sharedVolumeMountPaths);
        }
        if (\is_array($this->sideCarContainers)) {
            Model::validateArray($this->sideCarContainers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->initContainers) {
            if (\is_array($this->initContainers)) {
                $res['InitContainers'] = [];
                $n1 = 0;
                foreach ($this->initContainers as $item1) {
                    $res['InitContainers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lifecycle) {
            $res['Lifecycle'] = null !== $this->lifecycle ? $this->lifecycle->toArray($noStream) : $this->lifecycle;
        }

        if (null !== $this->podAnnotations) {
            if (\is_array($this->podAnnotations)) {
                $res['PodAnnotations'] = [];
                foreach ($this->podAnnotations as $key1 => $value1) {
                    $res['PodAnnotations'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->podLabels) {
            if (\is_array($this->podLabels)) {
                $res['PodLabels'] = [];
                foreach ($this->podLabels as $key1 => $value1) {
                    $res['PodLabels'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->sharedVolumeMountPaths) {
            if (\is_array($this->sharedVolumeMountPaths)) {
                $res['SharedVolumeMountPaths'] = [];
                $n1 = 0;
                foreach ($this->sharedVolumeMountPaths as $item1) {
                    $res['SharedVolumeMountPaths'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sideCarContainers) {
            if (\is_array($this->sideCarContainers)) {
                $res['SideCarContainers'] = [];
                $n1 = 0;
                foreach ($this->sideCarContainers as $item1) {
                    $res['SideCarContainers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['InitContainers'])) {
            if (!empty($map['InitContainers'])) {
                $model->initContainers = [];
                $n1 = 0;
                foreach ($map['InitContainers'] as $item1) {
                    $model->initContainers[$n1] = ContainerSpec::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Lifecycle'])) {
            $model->lifecycle = Lifecycle::fromMap($map['Lifecycle']);
        }

        if (isset($map['PodAnnotations'])) {
            if (!empty($map['PodAnnotations'])) {
                $model->podAnnotations = [];
                foreach ($map['PodAnnotations'] as $key1 => $value1) {
                    $model->podAnnotations[$key1] = $value1;
                }
            }
        }

        if (isset($map['PodLabels'])) {
            if (!empty($map['PodLabels'])) {
                $model->podLabels = [];
                foreach ($map['PodLabels'] as $key1 => $value1) {
                    $model->podLabels[$key1] = $value1;
                }
            }
        }

        if (isset($map['SharedVolumeMountPaths'])) {
            if (!empty($map['SharedVolumeMountPaths'])) {
                $model->sharedVolumeMountPaths = [];
                $n1 = 0;
                foreach ($map['SharedVolumeMountPaths'] as $item1) {
                    $model->sharedVolumeMountPaths[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SideCarContainers'])) {
            if (!empty($map['SideCarContainers'])) {
                $model->sideCarContainers = [];
                $n1 = 0;
                foreach ($map['SideCarContainers'] as $item1) {
                    $model->sideCarContainers[$n1] = ContainerSpec::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
