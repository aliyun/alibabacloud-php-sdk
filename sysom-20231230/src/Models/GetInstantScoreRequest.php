<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class GetInstantScoreRequest extends Model
{
    /**
     * @var string
     */
    public $cluster;
    /**
     * @var string
     */
    public $instance;
    protected $_name = [
        'cluster'  => 'cluster',
        'instance' => 'instance',
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

        if (null !== $this->instance) {
            $res['instance'] = $this->instance;
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

        if (isset($map['instance'])) {
            $model->instance = $map['instance'];
        }

        return $model;
    }
}
