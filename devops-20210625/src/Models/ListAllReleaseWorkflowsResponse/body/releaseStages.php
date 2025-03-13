<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListAllReleaseWorkflowsResponse\body;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListAllReleaseWorkflowsResponse\body\releaseStages\variableGroups;
use AlibabaCloud\Tea\Model;

class releaseStages extends Model
{
    /**
     * @example testApp
     *
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 5aa8cc67e75e41bf9dddeb708775bcc3
     *
     * @var string
     */
    public $sn;

    /**
     * @example ce51b31b996246ecaf874736838360b2
     *
     * @var string
     */
    public $releaseWorkflowSn;

    /**
     * @example 1
     *
     * @var string
     */
    public $order;

    /**
     * @var variableGroups[]
     */
    public $variableGroups;
    protected $_name = [
        'appName'           => 'appName',
        'name'              => 'name',
        'sn'                => 'sn',
        'releaseWorkflowSn' => 'releaseWorkflowSn',
        'order'             => 'order',
        'variableGroups'    => 'variableGroups',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['variableGroups'] = [];
            if (null !== $this->variableGroups && \is_array($this->variableGroups)) {
                $n = 0;
                foreach ($this->variableGroups as $item) {
                    $res['variableGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return releaseStages
     */
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
                $n                     = 0;
                foreach ($map['variableGroups'] as $item) {
                    $model->variableGroups[$n++] = null !== $item ? variableGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
