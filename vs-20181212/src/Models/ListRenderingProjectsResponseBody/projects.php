<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingProjectsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingProjectsResponseBody\projects\sessionAttribs;

class projects extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var sessionAttribs
     */
    public $sessionAttribs;

    /**
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

    public function validate()
    {
        if (null !== $this->sessionAttribs) {
            $this->sessionAttribs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['SessionAttribs'] = null !== $this->sessionAttribs ? $this->sessionAttribs->toArray($noStream) : $this->sessionAttribs;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
