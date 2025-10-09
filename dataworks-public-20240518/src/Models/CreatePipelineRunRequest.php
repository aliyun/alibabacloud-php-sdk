<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreatePipelineRunRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $objectIds;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'description' => 'Description',
        'objectIds' => 'ObjectIds',
        'projectId' => 'ProjectId',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->objectIds)) {
            Model::validateArray($this->objectIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->objectIds) {
            if (\is_array($this->objectIds)) {
                $res['ObjectIds'] = [];
                $n1 = 0;
                foreach ($this->objectIds as $item1) {
                    $res['ObjectIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ObjectIds'])) {
            if (!empty($map['ObjectIds'])) {
                $model->objectIds = [];
                $n1 = 0;
                foreach ($map['ObjectIds'] as $item1) {
                    $model->objectIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
