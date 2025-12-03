<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListAllReleaseWorkflowsResponse\body;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListAllReleaseWorkflowsResponse\body\releaseStages\variableGroups;

class releaseStages extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sn;

    /**
     * @var string
     */
    public $releaseWorkflowSn;

    /**
     * @var string
     */
    public $order;

    /**
     * @var variableGroups[]
     */
    public $variableGroups;
    protected $_name = [
        'appName' => 'appName',
        'name' => 'name',
        'sn' => 'sn',
        'releaseWorkflowSn' => 'releaseWorkflowSn',
        'order' => 'order',
        'variableGroups' => 'variableGroups',
    ];

    public function validate()
    {
        if (\is_array($this->variableGroups)) {
            Model::validateArray($this->variableGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['appName'] = $this->appName;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->sn) {
            $res['sn'] = $this->sn;
        }

        if (null !== $this->releaseWorkflowSn) {
            $res['releaseWorkflowSn'] = $this->releaseWorkflowSn;
        }

        if (null !== $this->order) {
            $res['order'] = $this->order;
        }

        if (null !== $this->variableGroups) {
            if (\is_array($this->variableGroups)) {
                $res['variableGroups'] = [];
                $n1 = 0;
                foreach ($this->variableGroups as $item1) {
                    $res['variableGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['appName'])) {
            $model->appName = $map['appName'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['sn'])) {
            $model->sn = $map['sn'];
        }

        if (isset($map['releaseWorkflowSn'])) {
            $model->releaseWorkflowSn = $map['releaseWorkflowSn'];
        }

        if (isset($map['order'])) {
            $model->order = $map['order'];
        }

        if (isset($map['variableGroups'])) {
            if (!empty($map['variableGroups'])) {
                $model->variableGroups = [];
                $n1 = 0;
                foreach ($map['variableGroups'] as $item1) {
                    $model->variableGroups[$n1] = variableGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
