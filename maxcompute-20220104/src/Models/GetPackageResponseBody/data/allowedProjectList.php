<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetPackageResponseBody\data;

use AlibabaCloud\Tea\Model;

class allowedProjectList extends Model
{
    /**
     * @description The security level for sensitive data.
     *
     * @example 2
     *
     * @var string
     */
    public $label;

    /**
     * @description The name of the MaxCompute project.
     *
     * @example proejctB
     *
     * @var string
     */
    public $project;
    protected $_name = [
        'label'   => 'label',
        'project' => 'project',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['label'] = $this->label;
        }
        if (null !== $this->project) {
            $res['project'] = $this->project;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return allowedProjectList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['label'])) {
            $model->label = $map['label'];
        }
        if (isset($map['project'])) {
            $model->project = $map['project'];
        }

        return $model;
    }
}
