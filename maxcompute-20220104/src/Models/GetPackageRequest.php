<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class GetPackageRequest extends Model
{
    /**
     * @description The project to which the package belongs. This parameter is required if the package is installed in the MaxCompute project.
     *
     * @example projectB
     *
     * @var string
     */
    public $sourceProject;
    protected $_name = [
        'sourceProject' => 'sourceProject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceProject) {
            $res['sourceProject'] = $this->sourceProject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPackageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['sourceProject'])) {
            $model->sourceProject = $map['sourceProject'];
        }

        return $model;
    }
}
