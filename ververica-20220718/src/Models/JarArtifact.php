<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

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
        'entryClass' => 'entryClass',
        'jarUri' => 'jarUri',
        'mainArgs' => 'mainArgs',
    ];

    public function validate()
    {
        if (\is_array($this->additionalDependencies)) {
            Model::validateArray($this->additionalDependencies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->additionalDependencies) {
            if (\is_array($this->additionalDependencies)) {
                $res['additionalDependencies'] = [];
                $n1 = 0;
                foreach ($this->additionalDependencies as $item1) {
                    $res['additionalDependencies'][$n1] = $item1;
                    ++$n1;
                }
            }
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
                $n1 = 0;
                foreach ($map['additionalDependencies'] as $item1) {
                    $model->additionalDependencies[$n1] = $item1;
                    ++$n1;
                }
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
