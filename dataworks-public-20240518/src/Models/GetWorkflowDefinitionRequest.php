<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class GetWorkflowDefinitionRequest extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $includeScriptContent;

    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'id' => 'Id',
        'includeScriptContent' => 'IncludeScriptContent',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->includeScriptContent) {
            $res['IncludeScriptContent'] = $this->includeScriptContent;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IncludeScriptContent'])) {
            $model->includeScriptContent = $map['IncludeScriptContent'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
