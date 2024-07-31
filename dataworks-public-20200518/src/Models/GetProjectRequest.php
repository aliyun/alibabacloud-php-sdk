<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetProjectRequest extends Model
{
    /**
     * @description The ID of the DataWorks workspace. You can call the [ListProjects](https://help.aliyun.com/document_detail/2780068.html) operation to query the ID.
     *
     * @example 27
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The name of the DataWorks workspace. You can call the [ListProjects](https://help.aliyun.com/document_detail/2780068.html) operation to query the name.
     *
     * @example test_project
     *
     * @var string
     */
    public $projectIdentifier;
    protected $_name = [
        'projectId'         => 'ProjectId',
        'projectIdentifier' => 'ProjectIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }

        return $model;
    }
}
