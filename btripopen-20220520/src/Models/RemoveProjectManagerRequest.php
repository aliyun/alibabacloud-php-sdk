<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\RemoveProjectManagerRequest\orgEntities;

class RemoveProjectManagerRequest extends Model
{
    /**
     * @var orgEntities[]
     */
    public $orgEntities;

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
        'orgEntities' => 'org_entities',
        'outProjectId' => 'out_project_id',
        'projectId' => 'project_id',
        'removeAll' => 'remove_all',
    ];

    public function validate()
    {
        if (\is_array($this->orgEntities)) {
            Model::validateArray($this->orgEntities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orgEntities) {
            if (\is_array($this->orgEntities)) {
                $res['org_entities'] = [];
                $n1 = 0;
                foreach ($this->orgEntities as $item1) {
                    $res['org_entities'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['org_entities'])) {
                $model->orgEntities = [];
                $n1 = 0;
                foreach ($map['org_entities'] as $item1) {
                    $model->orgEntities[$n1] = orgEntities::fromMap($item1);
                    ++$n1;
                }
            }
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
