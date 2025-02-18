<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListPackagesResponseBody\data;

use AlibabaCloud\Dara\Model;

class installedPackages extends Model
{
    /**
     * @var int
     */
    public $installTime;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $sourceProject;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'installTime'   => 'installTime',
        'name'          => 'name',
        'sourceProject' => 'sourceProject',
        'status'        => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->installTime) {
            $res['installTime'] = $this->installTime;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->sourceProject) {
            $res['sourceProject'] = $this->sourceProject;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['installTime'])) {
            $model->installTime = $map['installTime'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['sourceProject'])) {
            $model->sourceProject = $map['sourceProject'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
