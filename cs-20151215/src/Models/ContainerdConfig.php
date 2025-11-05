<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class ContainerdConfig extends Model
{
    /**
     * @var bool
     */
    public $ignoreImageDefinedVolume;

    /**
     * @var string[]
     */
    public $insecureRegistries;

    /**
     * @var int
     */
    public $limitCore;

    /**
     * @var int
     */
    public $limitMemLock;

    /**
     * @var int
     */
    public $limitNoFile;

    /**
     * @var int
     */
    public $maxConcurrentDownloads;

    /**
     * @var string[]
     */
    public $registryMirrors;
    protected $_name = [
        'ignoreImageDefinedVolume' => 'ignoreImageDefinedVolume',
        'insecureRegistries' => 'insecureRegistries',
        'limitCore' => 'limitCore',
        'limitMemLock' => 'limitMemLock',
        'limitNoFile' => 'limitNoFile',
        'maxConcurrentDownloads' => 'maxConcurrentDownloads',
        'registryMirrors' => 'registryMirrors',
    ];

    public function validate()
    {
        if (\is_array($this->insecureRegistries)) {
            Model::validateArray($this->insecureRegistries);
        }
        if (\is_array($this->registryMirrors)) {
            Model::validateArray($this->registryMirrors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ignoreImageDefinedVolume) {
            $res['ignoreImageDefinedVolume'] = $this->ignoreImageDefinedVolume;
        }

        if (null !== $this->insecureRegistries) {
            if (\is_array($this->insecureRegistries)) {
                $res['insecureRegistries'] = [];
                $n1 = 0;
                foreach ($this->insecureRegistries as $item1) {
                    $res['insecureRegistries'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->limitCore) {
            $res['limitCore'] = $this->limitCore;
        }

        if (null !== $this->limitMemLock) {
            $res['limitMemLock'] = $this->limitMemLock;
        }

        if (null !== $this->limitNoFile) {
            $res['limitNoFile'] = $this->limitNoFile;
        }

        if (null !== $this->maxConcurrentDownloads) {
            $res['maxConcurrentDownloads'] = $this->maxConcurrentDownloads;
        }

        if (null !== $this->registryMirrors) {
            if (\is_array($this->registryMirrors)) {
                $res['registryMirrors'] = [];
                $n1 = 0;
                foreach ($this->registryMirrors as $item1) {
                    $res['registryMirrors'][$n1] = $item1;
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
        if (isset($map['ignoreImageDefinedVolume'])) {
            $model->ignoreImageDefinedVolume = $map['ignoreImageDefinedVolume'];
        }

        if (isset($map['insecureRegistries'])) {
            if (!empty($map['insecureRegistries'])) {
                $model->insecureRegistries = [];
                $n1 = 0;
                foreach ($map['insecureRegistries'] as $item1) {
                    $model->insecureRegistries[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['limitCore'])) {
            $model->limitCore = $map['limitCore'];
        }

        if (isset($map['limitMemLock'])) {
            $model->limitMemLock = $map['limitMemLock'];
        }

        if (isset($map['limitNoFile'])) {
            $model->limitNoFile = $map['limitNoFile'];
        }

        if (isset($map['maxConcurrentDownloads'])) {
            $model->maxConcurrentDownloads = $map['maxConcurrentDownloads'];
        }

        if (isset($map['registryMirrors'])) {
            if (!empty($map['registryMirrors'])) {
                $model->registryMirrors = [];
                $n1 = 0;
                foreach ($map['registryMirrors'] as $item1) {
                    $model->registryMirrors[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
