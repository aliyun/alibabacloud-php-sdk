<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\AddEditingProjectResponseBody;

use AlibabaCloud\Tea\Model;

class project extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 2017-01-11T12:00:00Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description 朴灵
     *
     * @example testtimeline001desciption
     *
     * @var string
     */
    public $description;

    /**
     * @description 58928
     *
     * @example 2017-01-11T13:00:00Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @example fb2101bf24bf4df34c4cb3187****
     *
     * @var string
     */
    public $projectId;

    /**
     * @description Creates an online editing project.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @example testtimeline
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'description'  => 'Description',
        'modifiedTime' => 'ModifiedTime',
        'projectId'    => 'ProjectId',
        'status'       => 'Status',
        'title'        => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return project
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
