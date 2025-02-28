<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class SqlArtifact extends Model
{
    /**
     * @var string[]
     */
    public $additionalDependencies;
    /**
     * @var string
     */
    public $sqlScript;
    protected $_name = [
        'additionalDependencies' => 'additionalDependencies',
        'sqlScript'              => 'sqlScript',
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
                $n1                            = 0;
                foreach ($this->additionalDependencies as $item1) {
                    $res['additionalDependencies'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sqlScript) {
            $res['sqlScript'] = $this->sqlScript;
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

        if (isset($map['sqlScript'])) {
            $model->sqlScript = $map['sqlScript'];
        }

        return $model;
    }
}
