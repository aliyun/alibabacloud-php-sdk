<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class RemoveProjectManagerShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $orgEntitiesShrink;

    /**
     * @var string
     */
    public $outProjectId;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var bool
     */
    public $removeAll;
    protected $_name = [
        'orgEntitiesShrink' => 'org_entities',
        'outProjectId' => 'out_project_id',
        'projectId' => 'project_id',
        'removeAll' => 'remove_all',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orgEntitiesShrink) {
            $res['org_entities'] = $this->orgEntitiesShrink;
        }

        if (null !== $this->outProjectId) {
            $res['out_project_id'] = $this->outProjectId;
        }

        if (null !== $this->projectId) {
            $res['project_id'] = $this->projectId;
        }

        if (null !== $this->removeAll) {
            $res['remove_all'] = $this->removeAll;
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
        if (isset($map['org_entities'])) {
            $model->orgEntitiesShrink = $map['org_entities'];
        }

        if (isset($map['out_project_id'])) {
            $model->outProjectId = $map['out_project_id'];
        }

        if (isset($map['project_id'])) {
            $model->projectId = $map['project_id'];
        }

        if (isset($map['remove_all'])) {
            $model->removeAll = $map['remove_all'];
        }

        return $model;
    }
}
