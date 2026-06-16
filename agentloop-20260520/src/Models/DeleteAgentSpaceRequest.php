<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class DeleteAgentSpaceRequest extends Model
{
    /**
     * @var bool
     */
    public $deleteCmsWorkspace;

    /**
     * @var bool
     */
    public $deleteMseNamespace;

    /**
     * @var bool
     */
    public $deleteSlsProject;
    protected $_name = [
        'deleteCmsWorkspace' => 'deleteCmsWorkspace',
        'deleteMseNamespace' => 'deleteMseNamespace',
        'deleteSlsProject' => 'deleteSlsProject',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleteCmsWorkspace) {
            $res['deleteCmsWorkspace'] = $this->deleteCmsWorkspace;
        }

        if (null !== $this->deleteMseNamespace) {
            $res['deleteMseNamespace'] = $this->deleteMseNamespace;
        }

        if (null !== $this->deleteSlsProject) {
            $res['deleteSlsProject'] = $this->deleteSlsProject;
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
        if (isset($map['deleteCmsWorkspace'])) {
            $model->deleteCmsWorkspace = $map['deleteCmsWorkspace'];
        }

        if (isset($map['deleteMseNamespace'])) {
            $model->deleteMseNamespace = $map['deleteMseNamespace'];
        }

        if (isset($map['deleteSlsProject'])) {
            $model->deleteSlsProject = $map['deleteSlsProject'];
        }

        return $model;
    }
}
