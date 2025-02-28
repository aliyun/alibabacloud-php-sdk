<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class Artifact extends Model
{
    /**
     * @var JarArtifact
     */
    public $jarArtifact;
    /**
     * @var string
     */
    public $kind;
    /**
     * @var PythonArtifact
     */
    public $pythonArtifact;
    /**
     * @var SqlArtifact
     */
    public $sqlArtifact;
    protected $_name = [
        'jarArtifact'    => 'jarArtifact',
        'kind'           => 'kind',
        'pythonArtifact' => 'pythonArtifact',
        'sqlArtifact'    => 'sqlArtifact',
    ];

    public function validate()
    {
        if (null !== $this->jarArtifact) {
            $this->jarArtifact->validate();
        }
        if (null !== $this->pythonArtifact) {
            $this->pythonArtifact->validate();
        }
        if (null !== $this->sqlArtifact) {
            $this->sqlArtifact->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jarArtifact) {
            $res['jarArtifact'] = null !== $this->jarArtifact ? $this->jarArtifact->toArray($noStream) : $this->jarArtifact;
        }

        if (null !== $this->kind) {
            $res['kind'] = $this->kind;
        }

        if (null !== $this->pythonArtifact) {
            $res['pythonArtifact'] = null !== $this->pythonArtifact ? $this->pythonArtifact->toArray($noStream) : $this->pythonArtifact;
        }

        if (null !== $this->sqlArtifact) {
            $res['sqlArtifact'] = null !== $this->sqlArtifact ? $this->sqlArtifact->toArray($noStream) : $this->sqlArtifact;
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
        if (isset($map['jarArtifact'])) {
            $model->jarArtifact = JarArtifact::fromMap($map['jarArtifact']);
        }

        if (isset($map['kind'])) {
            $model->kind = $map['kind'];
        }

        if (isset($map['pythonArtifact'])) {
            $model->pythonArtifact = PythonArtifact::fromMap($map['pythonArtifact']);
        }

        if (isset($map['sqlArtifact'])) {
            $model->sqlArtifact = SqlArtifact::fromMap($map['sqlArtifact']);
        }

        return $model;
    }
}
