<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgPlatformQueryProjectsAndSchemaFromMetaResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example c-12345
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example emr_test_project
     *
     * @var string
     */
    public $project;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'project'   => 'Project',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }

        return $model;
    }
}
