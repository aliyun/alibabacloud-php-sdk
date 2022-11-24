<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class JarArtifact extends Model
{
    /**
     * @var string[]
     */
    public $additionalDependencies;

    /**
     * @var string
     */
    public $entryClass;

    /**
     * @var string
     */
    public $jarUri;

    /**
     * @var string
     */
    public $mainArgs;
    protected $_name = [
        'additionalDependencies' => 'additionalDependencies',
        'entryClass'             => 'entryClass',
        'jarUri'                 => 'jarUri',
        'mainArgs'               => 'mainArgs',
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
        if (null !== $this->entryClass) {
            $res['entryClass'] = $this->entryClass;
        }
        if (null !== $this->jarUri) {
            $res['jarUri'] = $this->jarUri;
        }
        if (null !== $this->mainArgs) {
            $res['mainArgs'] = $this->mainArgs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JarArtifact
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['additionalDependencies'])) {
            if (!empty($map['additionalDependencies'])) {
                $model->additionalDependencies = $map['additionalDependencies'];
            }
        }
        if (isset($map['entryClass'])) {
            $model->entryClass = $map['entryClass'];
        }
        if (isset($map['jarUri'])) {
            $model->jarUri = $map['jarUri'];
        }
        if (isset($map['mainArgs'])) {
            $model->mainArgs = $map['mainArgs'];
        }

        return $model;
    }
}
