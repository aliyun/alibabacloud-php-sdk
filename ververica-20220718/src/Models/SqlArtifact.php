<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalDependencies) {
            $res['additionalDependencies'] = $this->additionalDependencies;
        }
        if (null !== $this->sqlScript) {
            $res['sqlScript'] = $this->sqlScript;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SqlArtifact
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['additionalDependencies'])) {
            if (!empty($map['additionalDependencies'])) {
                $model->additionalDependencies = $map['additionalDependencies'];
            }
        }
        if (isset($map['sqlScript'])) {
            $model->sqlScript = $map['sqlScript'];
        }

        return $model;
    }
}
