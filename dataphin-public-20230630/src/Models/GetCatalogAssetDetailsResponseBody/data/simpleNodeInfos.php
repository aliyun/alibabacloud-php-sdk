<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetCatalogAssetDetailsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetCatalogAssetDetailsResponseBody\data\simpleNodeInfos\owners;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetCatalogAssetDetailsResponseBody\data\simpleNodeInfos\project;

class simpleNodeInfos extends Model
{
    /**
     * @var string
     */
    public $bizUnit;

    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $nodeScheduleType;

    /**
     * @var owners[]
     */
    public $owners;

    /**
     * @var project
     */
    public $project;

    /**
     * @var string
     */
    public $subBizType;
    protected $_name = [
        'bizUnit' => 'BizUnit',
        'env' => 'Env',
        'nodeId' => 'NodeId',
        'nodeName' => 'NodeName',
        'nodeScheduleType' => 'NodeScheduleType',
        'owners' => 'Owners',
        'project' => 'Project',
        'subBizType' => 'SubBizType',
    ];

    public function validate()
    {
        if (\is_array($this->owners)) {
            Model::validateArray($this->owners);
        }
        if (null !== $this->project) {
            $this->project->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizUnit) {
            $res['BizUnit'] = $this->bizUnit;
        }

        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->nodeScheduleType) {
            $res['NodeScheduleType'] = $this->nodeScheduleType;
        }

        if (null !== $this->owners) {
            if (\is_array($this->owners)) {
                $res['Owners'] = [];
                $n1 = 0;
                foreach ($this->owners as $item1) {
                    $res['Owners'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->project) {
            $res['Project'] = null !== $this->project ? $this->project->toArray($noStream) : $this->project;
        }

        if (null !== $this->subBizType) {
            $res['SubBizType'] = $this->subBizType;
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
        if (isset($map['BizUnit'])) {
            $model->bizUnit = $map['BizUnit'];
        }

        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['NodeScheduleType'])) {
            $model->nodeScheduleType = $map['NodeScheduleType'];
        }

        if (isset($map['Owners'])) {
            if (!empty($map['Owners'])) {
                $model->owners = [];
                $n1 = 0;
                foreach ($map['Owners'] as $item1) {
                    $model->owners[$n1] = owners::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Project'])) {
            $model->project = project::fromMap($map['Project']);
        }

        if (isset($map['SubBizType'])) {
            $model->subBizType = $map['SubBizType'];
        }

        return $model;
    }
}
