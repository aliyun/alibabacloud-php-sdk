<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingProjectsResponseBody;

use AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingProjectsResponseBody\projects\sessionAttribs;
use AlibabaCloud\Tea\Model;

class projects extends Model
{
    /**
     * @example 2024-09-09T18:44:49+08:00
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example description
     *
     * @var string
     */
    public $description;

    /**
     * @example project-422bc38dfgh5eb44149f135ef76304f63b
     *
     * @var string
     */
    public $projectId;

    /**
     * @example prod-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @var sessionAttribs
     */
    public $sessionAttribs;

    /**
     * @example 2024-10-09T18:44:49+08:00
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'sessionAttribs' => 'SessionAttribs',
        'updateTime' => 'UpdateTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->sessionAttribs) {
            $res['SessionAttribs'] = null !== $this->sessionAttribs ? $this->sessionAttribs->toMap() : null;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projects
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
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['SessionAttribs'])) {
            $model->sessionAttribs = sessionAttribs::fromMap($map['SessionAttribs']);
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
