<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetAgentConfigResponseBody\data;

use AlibabaCloud\Dara\Model;

class resource extends Model
{
    /**
     * @var int
     */
    public $cluster;

    /**
     * @var int
     */
    public $node;
    protected $_name = [
        'cluster' => 'cluster',
        'node' => 'node',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cluster) {
            $res['cluster'] = $this->cluster;
        }

        if (null !== $this->node) {
            $res['node'] = $this->node;
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
        if (isset($map['cluster'])) {
            $model->cluster = $map['cluster'];
        }

        if (isset($map['node'])) {
            $model->node = $map['node'];
        }

        return $model;
    }
}
