<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class PythonArtifact extends Model
{
    /**
     * @var string[]
     */
    public $additionalDependencies;
    /**
     * @var string[]
     */
    public $additionalPythonArchives;
    /**
     * @var string[]
     */
    public $additionalPythonLibraries;
    /**
     * @var string
     */
    public $entryModule;
    /**
     * @var string
     */
    public $mainArgs;
    /**
     * @var string
     */
    public $pythonArtifactUri;
    protected $_name = [
        'additionalDependencies'    => 'additionalDependencies',
        'additionalPythonArchives'  => 'additionalPythonArchives',
        'additionalPythonLibraries' => 'additionalPythonLibraries',
        'entryModule'               => 'entryModule',
        'mainArgs'                  => 'mainArgs',
        'pythonArtifactUri'         => 'pythonArtifactUri',
    ];

    public function validate()
    {
        if (\is_array($this->additionalDependencies)) {
            Model::validateArray($this->additionalDependencies);
        }
        if (\is_array($this->additionalPythonArchives)) {
            Model::validateArray($this->additionalPythonArchives);
        }
        if (\is_array($this->additionalPythonLibraries)) {
            Model::validateArray($this->additionalPythonLibraries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->additionalDependencies) {
            if (\is_array($this->additionalDependencies)) {
                $res['additionalDependencies'] = [];
                $n1                            = 0;
                foreach ($this->additionalDependencies as $item1) {
                    $res['additionalDependencies'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->additionalPythonArchives) {
            if (\is_array($this->additionalPythonArchives)) {
                $res['additionalPythonArchives'] = [];
                $n1                              = 0;
                foreach ($this->additionalPythonArchives as $item1) {
                    $res['additionalPythonArchives'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->additionalPythonLibraries) {
            if (\is_array($this->additionalPythonLibraries)) {
                $res['additionalPythonLibraries'] = [];
                $n1                               = 0;
                foreach ($this->additionalPythonLibraries as $item1) {
                    $res['additionalPythonLibraries'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->entryModule) {
            $res['entryModule'] = $this->entryModule;
        }

        if (null !== $this->mainArgs) {
            $res['mainArgs'] = $this->mainArgs;
        }

        if (null !== $this->pythonArtifactUri) {
            $res['pythonArtifactUri'] = $this->pythonArtifactUri;
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
        if (isset($map['additionalDependencies'])) {
            if (!empty($map['additionalDependencies'])) {
                $model->additionalDependencies = [];
                $n1                            = 0;
                foreach ($map['additionalDependencies'] as $item1) {
                    $model->additionalDependencies[$n1++] = $item1;
                }
            }
        }

        if (isset($map['additionalPythonArchives'])) {
            if (!empty($map['additionalPythonArchives'])) {
                $model->additionalPythonArchives = [];
                $n1                              = 0;
                foreach ($map['additionalPythonArchives'] as $item1) {
                    $model->additionalPythonArchives[$n1++] = $item1;
                }
            }
        }

        if (isset($map['additionalPythonLibraries'])) {
            if (!empty($map['additionalPythonLibraries'])) {
                $model->additionalPythonLibraries = [];
                $n1                               = 0;
                foreach ($map['additionalPythonLibraries'] as $item1) {
                    $model->additionalPythonLibraries[$n1++] = $item1;
                }
            }
        }

        if (isset($map['entryModule'])) {
            $model->entryModule = $map['entryModule'];
        }

        if (isset($map['mainArgs'])) {
            $model->mainArgs = $map['mainArgs'];
        }

        if (isset($map['pythonArtifactUri'])) {
            $model->pythonArtifactUri = $map['pythonArtifactUri'];
        }

        return $model;
    }
}
