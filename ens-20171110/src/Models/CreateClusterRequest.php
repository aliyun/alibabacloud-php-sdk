<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class CreateClusterRequest extends Model
{
    /**
     * @var string
     */
    public $clusterVersion;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'clusterVersion' => 'ClusterVersion',
        'name' => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterVersion) {
            $res['ClusterVersion'] = $this->clusterVersion;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['ClusterVersion'])) {
            $model->clusterVersion = $map['ClusterVersion'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
