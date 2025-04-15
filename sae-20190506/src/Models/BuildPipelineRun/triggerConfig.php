<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\BuildPipelineRun;

use AlibabaCloud\Dara\Model;

class triggerConfig extends Model
{
    /**
     * @var string
     */
    public $branchName;

    /**
     * @var string
     */
    public $tagName;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'branchName' => 'BranchName',
        'tagName' => 'TagName',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->branchName) {
            $res['BranchName'] = $this->branchName;
        }

        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
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
        if (isset($map['BranchName'])) {
            $model->branchName = $map['BranchName'];
        }

        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
