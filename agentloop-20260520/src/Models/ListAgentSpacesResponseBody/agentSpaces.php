<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListAgentSpacesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListAgentSpacesResponseBody\agentSpaces\mseNamespace;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListAgentSpacesResponseBody\agentSpaces\tags;

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
     * @var tags[]
     */
    public $tags;

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
        'tags' => 'tags',
        'updateTime' => 'updateTime',
    ];

    public function validate()
    {
        if (null !== $this->mseNamespace) {
            $this->mseNamespace->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
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

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
