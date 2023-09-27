<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

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
     * @example https://oss//bucket//test.py
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalDependencies) {
            $res['additionalDependencies'] = $this->additionalDependencies;
        }
        if (null !== $this->additionalPythonArchives) {
            $res['additionalPythonArchives'] = $this->additionalPythonArchives;
        }
        if (null !== $this->additionalPythonLibraries) {
            $res['additionalPythonLibraries'] = $this->additionalPythonLibraries;
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

    /**
     * @param array $map
     *
     * @return PythonArtifact
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['additionalDependencies'])) {
            if (!empty($map['additionalDependencies'])) {
                $model->additionalDependencies = $map['additionalDependencies'];
            }
        }
        if (isset($map['additionalPythonArchives'])) {
            if (!empty($map['additionalPythonArchives'])) {
                $model->additionalPythonArchives = $map['additionalPythonArchives'];
            }
        }
        if (isset($map['additionalPythonLibraries'])) {
            if (!empty($map['additionalPythonLibraries'])) {
                $model->additionalPythonLibraries = $map['additionalPythonLibraries'];
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
