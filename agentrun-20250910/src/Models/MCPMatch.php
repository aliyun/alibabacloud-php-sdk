<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class MCPMatch extends Model
{
    /**
     * @var MCPPathMatch
     */
    public $path;
    protected $_name = [
        'path' => 'path',
    ];

    public function validate()
    {
        if (null !== $this->path) {
            $this->path->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->path) {
            $res['path'] = null !== $this->path ? $this->path->toArray($noStream) : $this->path;
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
        if (isset($map['path'])) {
            $model->path = MCPPathMatch::fromMap($map['path']);
        }

        return $model;
    }
}
