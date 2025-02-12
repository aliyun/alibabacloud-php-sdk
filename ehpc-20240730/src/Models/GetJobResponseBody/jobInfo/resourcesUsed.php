<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\GetJobResponseBody\jobInfo;

use AlibabaCloud\Dara\Model;

class resourcesUsed extends Model
{
    /**
     * @var string
     */
    public $cores;
    /**
     * @var string
     */
    public $memory;
    /**
     * @var string
     */
    public $nodes;
    protected $_name = [
        'cores'  => 'Cores',
        'memory' => 'Memory',
        'nodes'  => 'Nodes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->nodes) {
            $res['Nodes'] = $this->nodes;
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
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['Nodes'])) {
            $model->nodes = $map['Nodes'];
        }

        return $model;
    }
}
