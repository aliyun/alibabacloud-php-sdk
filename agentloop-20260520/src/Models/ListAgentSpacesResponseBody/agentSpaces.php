<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListAgentSpacesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListAgentSpacesResponseBody\agentSpaces\mseNamespace;

class agentSpaces extends Model
{
    /**
     * @var string
     */
    public $agentSpace;

    /**
     * @var string
     */
    public $cmsWorkspace;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var mseNamespace
     */
    public $mseNamespace;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $slsProject;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'agentSpace' => 'agentSpace',
        'cmsWorkspace' => 'cmsWorkspace',
        'createTime' => 'createTime',
        'description' => 'description',
        'mseNamespace' => 'mseNamespace',
        'regionId' => 'regionId',
        'slsProject' => 'slsProject',
        'updateTime' => 'updateTime',
    ];

    public function validate()
    {
        if (null !== $this->mseNamespace) {
            $this->mseNamespace->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentSpace) {
            $res['agentSpace'] = $this->agentSpace;
        }

        if (null !== $this->cmsWorkspace) {
            $res['cmsWorkspace'] = $this->cmsWorkspace;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->mseNamespace) {
            $res['mseNamespace'] = null !== $this->mseNamespace ? $this->mseNamespace->toArray($noStream) : $this->mseNamespace;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->slsProject) {
            $res['slsProject'] = $this->slsProject;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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
        if (isset($map['agentSpace'])) {
            $model->agentSpace = $map['agentSpace'];
        }

        if (isset($map['cmsWorkspace'])) {
            $model->cmsWorkspace = $map['cmsWorkspace'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['mseNamespace'])) {
            $model->mseNamespace = mseNamespace::fromMap($map['mseNamespace']);
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['slsProject'])) {
            $model->slsProject = $map['slsProject'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
