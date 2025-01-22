<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreateWorkflowDefinitionRequest extends Model
{
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var string
     */
    public $spec;
    protected $_name = [
        'projectId' => 'ProjectId',
        'spec'      => 'Spec',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
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
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        return $model;
    }
}
