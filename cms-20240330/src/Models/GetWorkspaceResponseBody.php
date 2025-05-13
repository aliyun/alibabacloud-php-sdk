<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class GetWorkspaceResponseBody extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $lastModifyTime;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $slsProject;

    /**
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'createTime' => 'createTime',
        'description' => 'description',
        'displayName' => 'displayName',
        'lastModifyTime' => 'lastModifyTime',
        'regionId' => 'regionId',
        'requestId' => 'requestId',
        'slsProject' => 'slsProject',
        'workspaceName' => 'workspaceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->lastModifyTime) {
            $res['lastModifyTime'] = $this->lastModifyTime;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->slsProject) {
            $res['slsProject'] = $this->slsProject;
        }

        if (null !== $this->workspaceName) {
            $res['workspaceName'] = $this->workspaceName;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['lastModifyTime'])) {
            $model->lastModifyTime = $map['lastModifyTime'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['slsProject'])) {
            $model->slsProject = $map['slsProject'];
        }

        if (isset($map['workspaceName'])) {
            $model->workspaceName = $map['workspaceName'];
        }

        return $model;
    }
}
