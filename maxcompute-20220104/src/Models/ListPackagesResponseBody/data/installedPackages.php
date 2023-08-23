<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListPackagesResponseBody\data;

use AlibabaCloud\Tea\Model;

class installedPackages extends Model
{
    /**
     * @description The time when the package was installed.
     *
     * @example 2022-09-02T02:30:34Z
     *
     * @var int
     */
    public $installTime;

    /**
     * @description The name of the package.
     *
     * @example packageB
     *
     * @var string
     */
    public $name;

    /**
     * @description The project to which the package belongs. This parameter is required if the package is installed in the MaxCompute project.
     *
     * @example projectB
     *
     * @var string
     */
    public $sourceProject;

    /**
     * @description The status of the package.
     *
     * @example OK
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return installedPackages
     */
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
